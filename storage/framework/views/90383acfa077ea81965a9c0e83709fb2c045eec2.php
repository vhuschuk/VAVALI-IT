<?php $__env->startSection('content'); ?>
<div id="presentation">
    <div class="transparent float-right d-flex justify-content-around align-content-stretch">
        <div class="d-flex flex-column justify-content-center">
            <span class="name">Національний університет</span>
            <span class="name">ОСТРОЗЬКА АКАДЕМІЯ</span>
        </div>
        <div class="d-flex flex-column justify-content-center">
            <img class="logo float-right" src="/img/logo_1149.png" width="109" height="164" alt="Logo"/>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="card mb-3 mt-3 megaimg" style="max-width: 80%; margin: auto">
           
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
        <div class="row  card-name">
            <div class="col-md-4">
            
                <img src="<?php echo e($i->img); ?>" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($i->journal_number); ?></h5>
                    <p class="card-text"><?php echo e($i->journal_description); ?></p>
                    <p class="card-text">Дата випуску: <?php echo e($i->date); ?></p>
                    <p class="card-text">Скачать PDF</p>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    </div>
    </div>
<div class="clearfix"></div>

<div class="container-fluid articles">
    <div class="container art">
        <div class="row">
            <div class="col-md-12">
                <h1>
                    НАЗВА ЖУРНАЛУ
                </h1>
                <h2>
                    Статті:
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-2">
            <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $art): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="article">
                    <span class="author"><?php echo e($art->author); ?></span>
                    <span class="title"><?php echo e($art->art_name); ?></span>
                    <p class="atr-text"><?php echo e($art->art_description); ?></p>
                    <button class="btn-pdf">PDF</button>
                    <span class="data_article"><?php echo e($art->date); ?></span>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
              </div>
             
        </div>
        <div class="row">
        <?php echo e($articles->links()); ?>

            </div>
        </div>
    </div>
</div>
</div>     
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\Laravel\APP\resources\views/pages/archive_page.blade.php ENDPATH**/ ?>