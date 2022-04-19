<?php
include "logic.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--kit code-->
    <script src="https://kit.fontawesome.com/b83bad8810.js" crossorigin="anonymous"></script>
    
    
    <title>Covid Tracker</title>
</head>
<body>
    <div>
        
        <div class="hhead">
            <h1>COVID TRACKER</h1>
        </div>
        <div>
            <table class="table">
                 <tbody">
                     <tr>
                         <th class="text-primary">Confirmed</th>
                         <th class="text-success" >Deaths</th>
                         <th class="text-danger">Recovered</th>
                     </tr>
                 </tbody>
                 <tbody>
                     <tr>
                         <th class="text-primary"><?php echo $cof_count ?></th>
                         <th class="text-success" ><?php echo $death_count ?></th>
                         <th class="text-danger"><?php echo $rec_count ?></th>
                     </tr>
                 </tbody>
            </table>
        </div>
        <div>
            <table class="table table-striped" >
                <thead>
                    <tr>
                        <th scope="col" >Countries</th>
                        <th>Confirmed Case</th>
                        <th>Deaths</th>
                        <th>Recovered</th>
                    </tr>
                </thead>
                <tbody class="tdata">
                    <?php
                    foreach($data as $key=>$value){
                    ?>
                    <tr>
                        <th><?php echo $key ?></th>
                        <th><?php echo $value[$dcount]['confirmed'] ?>
                        <small><i class="fa-solid fa-up"></i>
                            <?php echo " ".$value[$dcount]['confirmed']-$value[$dcount-1]['confirmed'] ?></small>
                        </th>
                        <th><?php echo $value[$dcount]['deaths'] ?></th>
                        <th><?php echo $value[$dcount]['recovered'] ?></th>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
    
</body>
</html>