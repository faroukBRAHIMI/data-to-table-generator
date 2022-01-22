<?php

namespace NALTIS\inc;

class Base {
    public function __construct(){        
        //init class
    }

    public function alert($msg, $err_type = 'danger'){
        echo "<div class='alert alert-$err_type' role='alert'> <b>Notice: </b> $msg </div>";
    }

    /**
     * @note get data file content
     * 
     * @input void
     * @output 2-dim array
     * 
     * @example a|b|c@gmail.com => array( array( 'a', 'b', 'c@gmail.com' ) )
     */
    public function get_data(){

            $data_arr = array();
            $data_file_path = NALTIS_BASE_PATH . "/coordonnees.dat";

            // return false if file not found
            if( ! file_exists( $data_file_path ) ) return "File path is not correct !";

            $file_size = filesize( $data_file_path );
            
            // return false if file size is not returned successfully
            if( ! $file_size ) return 'File size couldn\'t be retrieved ! \ File empty !';
            
            // grab the file
            $fp = fopen( $data_file_path , "r+");

            // read file line by lines
            while (($line = stream_get_line($fp, 1024 * 1024, "\n")) !== false) {
                // push line data to array
                array_push( $data_arr, explode('|', $line) );
            }
            // close file
            fclose($fp);
    
            return $data_arr;

    }

    /**
     * @see https://developer.wordpress.org/reference/functions/antispambot/
     * 
     */
    public function antispambot( $email_address, $hex_encoding = 0 ) {
        $email_no_spam_address = '';
        for ( $i = 0, $len = strlen( $email_address ); $i < $len; $i++ ) {
            $j = rand( 0, 1 + $hex_encoding );
            if ( 0 == $j ) {
                $email_no_spam_address .= '&#' . ord( $email_address[ $i ] ) . ';';
            } elseif ( 1 == $j ) {
                $email_no_spam_address .= $email_address[ $i ];
            } elseif ( 2 == $j ) {
                $email_no_spam_address .= '%' . zeroise( dechex( ord( $email_address[ $i ] ) ), 2 );
            }
        }
     
        return str_replace( '@', '&#64;', $email_no_spam_address );
    }
}

?>