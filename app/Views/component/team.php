<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Team Members</h5>
                <h1 class="mb-0">Professional Stuffs Ready to Help Your Business</h1>
            </div>
            <div class="row g-5">
            <?php if(count($team)>0){
                    foreach($team as $tmember){ ?>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="<?= base_url('asset/').$tmember['img_path'];?>" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="<?= $tmember['twitter'];?>"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="<?= $tmember['facebook'];?>"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="<?= $tmember['instagram'];?>"><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="<?= $tmember['indeed'];?>"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary"><?= $tmember['name'];?></h4>
                            <p class="text-uppercase m-0"><?= $tmember['profession'];?></p>
                        </div>
                    </div>
                </div>
                <?php    }
                }else{
                    echo "<p class='text-danger font-bold text-center'>Team Member Not Available</p>";
                } ?>
            </div>
        </div>
    </div>