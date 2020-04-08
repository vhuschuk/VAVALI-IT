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
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <label for="validationDefault01">Пошуковий запит</label>
                <input type="text" class="form-control" id="validationDefault01" value="Назва статті" required>
                <div>
                    <label for="validationDefault02">По автору</label>
                    <input type="text" class="form-control" id="validationDefault02" value="Автор" required>
                </div>
                <div>
                    <label for="validationDefault03">По ключовим словам</label>
                    <input type="text" class="form-control" id="validationDefault03" value="Ключові слова" required>
                </div>
                <p>За датою статті</p>
                <div class="row">
                    <div class="col-md-4">
                        <select class="custom-select" size="2">
                            <option selected>Оберіть рік</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                        </select>
                    </div>
                    <div class="col-md-5">
                        <select class="custom-select month" size="2">
                            <option selected>Оберіть місяць</option>
                            <option value="1">Січень</option>
                            <option value="2">Лютий</option>
                            <option value="3">Березень</option>
                            <option value="4">Квітень</option>
                            <option value="5">Травень</option>
                            <option value="6">Червень</option>
                            <option value="7">Липень</option>
                            <option value="8">Серпень</option>
                            <option value="9">Вересень</option>
                            <option value="10">Жовтень</option>
                            <option value="11">Листопад</option>
                            <option value="12">Грудень</option>
                        </select>
                        <input type="date" class="form-control calendar" id="date" name="date" placeholder="Дата"
                            required>
                        <div class="bn-sc">
                            <button class="btn-search" type="submit">Search</button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <select class="custom-select" size="2">
                            <option selected>Дата</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-12">
                        <p class="search_result">Нічого не знайдено</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\Laravel\APP\resources\views/pages/search.blade.php ENDPATH**/ ?>