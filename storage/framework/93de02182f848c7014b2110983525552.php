<div class="mx-2 mt-2">
    <div class="flex space-x-1">
        <span class="content-repeat-[─] text-gray flex-1"> </span>

        <span class="text-gray"> <?php echo e($preset); ?> </span>
    </div>

    <div>
        <span>
            <div class="flex space-x-1">
                <?php
                    $fixableErrors = $issues->filter->fixable();
                    $nonFixableErrors = $issues->reject->fixable();
                ?>

                <?php if($issues->count() == 0): ?>
                    <span class="bg-green text-gray px-2 font-bold uppercase"> PASS </span>
                <?php elseif($nonFixableErrors->count() == 0 && ! $testing): ?>
                    <span class="bg-green text-gray px-2 font-bold uppercase"> FIXED </span>
                <?php else: ?>
                    <span class="bg-red px-2 font-bold text-white uppercase"> FAIL </span>
                <?php endif; ?>

                <span class="content-repeat-[.] text-gray flex-1"></span>
                <span>
                    <span> <?php echo e($totalFiles); ?> <?php echo e(str('file')->plural($totalFiles)); ?> </span>

                    <?php if($nonFixableErrors->isNotEmpty()): ?>
                        <span> , <?php echo e($nonFixableErrors->count()); ?> <?php echo e(str('error')->plural($nonFixableErrors)); ?> </span>
                    <?php endif; ?>

                    <?php if($fixableErrors->isNotEmpty()): ?>
                        <span>
                            <?php if($testing): ?>
                                , <?php echo e($fixableErrors->count()); ?> style <?php echo e(str('issue')->plural($fixableErrors)); ?>

                            <?php else: ?>
                                , <?php echo e($fixableErrors->count()); ?> style <?php echo e(str('issue')->plural($fixableErrors)); ?> fixed
                            <?php endif; ?>
                        </span>
                    <?php endif; ?>
                </span>
            </div>
        </span>
    </div>
</div>
<?php /**PATH phar://C:/Users/popot/Desktop/Delovna_Praksa/backend/hosting-app/vendor/laravel/pint/builds/pint\resources\views/summary.blade.php ENDPATH**/ ?>