<?php
    /**
     * @note table partial uses theme class
     * 
     */
    use \NALTIS\inc\Base;
    $data = new Base();
?>
<main class="container mt-5">
        <div>
            <p class="h2 text-center">Content table</p>
        </div>
        <?php   
            // get_data will return failure reason as string
            if( gettype( $data->get_data() ) === 'string' ) $data->alert( $data->get_data() );
        ?>
        <div class="mt-4">
            <table class="table table-hover shadow rounded">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    //table row counter
                    $i=1;

                    if( $data->get_data() && gettype($data->get_data()) === 'array' ){
                        foreach($data->get_data() as $row){
                            //skip table row if not all info are provided
                            if( sizeof($row) !== 3) continue;
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $i; ?></th>
                                    <td><?php echo $row[0]; ?></td>
                                    <td><?php echo $row[1]; ?></td>
                                    <td><?php echo $data->antispambot($row[2]); ?></td>
                                </tr>
                            <?php
                            //increment counter
                            $i++;
                        }
                    }
                ?>
            </tbody>
            </table>
        </div>
</main>
