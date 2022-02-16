<?php require("./header.php"); ?>
<div class="container-fluid">
        <div class="row position-relative">
            <img class="w-100 img_fliter" src="./img/18.jpeg" alt="">
            <div class="">
                <h1 class="fs-1 privacy_header">FAQs</h1>
            </div>
        </div>
    </div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class='faq mt-5'>
            <?php 
                        require('./admin/dbconfig.php');
                        $sql = "SELECT faq.*, users.name
                        FROM  `faq` INNER JOIN users ON faq.user_id = users.id";

                        $result = mysqli_query($conn, $sql);

                    ?>
                    <?php
                        if($result->num_rows > 0){
                    ?>
                        
                <div class="global-label">
                    <div class="global-label-text text-center">
                    FAQs
                    </div>
                </div>
                <!--1 question-->
                <?php
                    while($row = mysqli_fetch_assoc($result)){
                ?>
                <div class="faq-container">
                    <div class="faq-label">
                        <div class="faq-label-text">
                            <?php echo $row['question']; ?>
                        </div>
                        <div class="faq-label-icon">
                            <span class="material-icons">
                            <i class="fas fa-chevron-down"></i>
                            </span>
                        </div>
                    </div>
                    <div class="faq-answer ">
                        <div class="faq-answer-content">
                        <?php echo $row['answer']; ?>

                        </div>
                    </div>  
                </div>
                <?php
                    }
                ?>
            </div>
            <?php  
                }
            ?>
        </div>
    </div>
</div>
</div>


<?php require("./footer.php"); ?>