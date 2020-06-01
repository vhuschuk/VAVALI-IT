<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="container search">
        <div class="row">
            <div class="col-md-12">
                <h1 class="search_h1">ПОШУК</h1>
            </div>
            <div class="col-md-5">
                <h2>Параметри пошуку</h2>
            </div>
            <div class="col-md-7">
                <h2>Результати пошуку</h2>
                <div class="col-md-8 offset-2">
                <?php if(isset($newsearchnames)): ?>
            <?php $__currentLoopData = $newsearchnames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $newsearchname): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
                <div class="article">
                    <span class="author"><?php echo e($newsearchname->author); ?></span> </b>
                    <span class="title"><?php echo e($newsearchname->art_name); ?></span>
                    <p class="atr-text"><?php echo e($newsearchname->art_description); ?></p>
                    <button class="btn-pdf">PDF</button>
                    <span class="data_article"><?php echo e($newsearchname->date); ?></span>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
              </div>
            </div>
        </div>
        <div class="row">
        <form action = "" method = "POST">
        <?php echo e(csrf_field()); ?>

        <?php echo method_field('post'); ?>
            <div class="col-md-5">
                <label for="validationDefault01">Пошуковий запит</label>
                <input type="text" class="form-control" name="NameArticle" id="validationDefault01" value="Назва статті" >
                <div>
                    <label for="validationDefault02">По автору</label>
                    <input type="text" class="form-control" name="NameAuthor" id="validationDefault02" value="Автор">
                </div>
               
                <p>За датою статті</p>
                <div class="row">
                    
                    <div class="col-md-5">
                        <input type="date"  id="date" name="date" placeholder="Дата" >
                        <div class="bn-sc">
                            <button class="btn-search" type="submit">Search</button>
                        </div>
                    </div>
                    
                </div>
                </form> 
            </div>
           
            
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\Laravel\APP\resources\views/pages/search.blade.php ENDPATH**/ ?>