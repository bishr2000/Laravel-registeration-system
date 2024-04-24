
@extends('layouts.app')
@section('title', 'البيانات الشخصية')
@section('content')

    <div style = "margin-top: 30px;" id = 'home' class="row">
        <h2 id = "th2" class = "text-center">البيانات الشهادة الثانوية</h2>
        <div class="col-2"></div>

        <div class="col-8">

            <form enctype="multipart/form-data" method = 'post' action="/certif-store">
                @csrf
                <div class = "row register-form">
                    <div id = 'mar1' class = "col-md-6">
                        <div>
                            <select name = 'certif_type' class="form-select">
                                <option selected>نوع الشهادة</option>
                                <option value="العامة">العامة</option>
                                <option value="المهني">المهني</option>
                                <option value="الشرعي">الشرعي</option>
                            </select>
                        </div>
                        <div>
                            <select name = 'speciality' class="form-select">
                                <option selected>التخصص</option>
                                <option value="العامة">علمي</option>
                                <option value="المهني">أدبي</option>
                                <option value="الشرعي">تجارة</option>
                                <option value="الشرعي">صناعة</option>
                                <option value="الشرعي">نسوي</option>
                                <option value="الشرعي">زراعة</option>
                                <option value="الشرعي">سياحة وفنادق</option>
                                <option value="الشرعي">معلوماتية </option>
                            </select>
                        </div>
                        <div><input name = 'year' class = "form-control" placeholder = 'عام دورة الاكتتاب' type="number" min="2000" max="2099" step="1"></div>
                        <div><input name = 'GPA' class = "form-control" placeholder = 'المجموع العام' type="text"></div>
                        <div>
                            <select name = 'chosen_lang' class="form-select">
                                <option selected>اللغة الجنبية المختارة</option>
                                <option value="الانكليزية">الانكليزية</option>
                                <option value="الفرنسية">الفرنسية</option>
                                <option value="الروسية">الروسية</option>
                            </select>
                        </div>
                        <div><input name = 'GPA_reli_lang' class = "form-control" placeholder = 'المجموع بعد طي احداللغتين و الديانة' type="text"></div>
                        <div><input name = 'certificate_image' class = "form-control" placeholder = 'صورة عن الشهادة الثانوية' type= "file"></div>
                    </div>
                    <div id = 'mar2' class = "col-md-6">
                        <div><input name = 'minister' class = "form-control" placeholder = 'الوزارة المانحة لها' type="text"></div>
                        <div><input name = 'certif_source' class = "form-control" placeholder = 'مصدرها' type="text"></div>
                        <div><input name = 'ektitab_num' class = "form-control" placeholder = 'رقم الاكتتاب' type="number"></div>
                        <div><input name = 'gpa_no_reli' class = "form-control" placeholder = 'المجموع بدون الديانة' type="text"></div>
                        <div>
                            <select name = 'deleted_lang' class="form-select">
                                <option selected>اللغة الأجنبية المحذوفة</option>
                                <option value="الانكليزية">الانكليزية</option>
                                <option value="الفرنسية">الفرنسية</option>
                                <option value="الروسية">الروسية</option>
                            </select>
                        </div>
                        <div><input name = 'percentage' class = "form-control" placeholder = 'النسبة المئوية' type="text"></div>
                        <div><input class = "form-control btn btn-primary" type = "submit" value = 'التالي'></div>
                    </div>
                </div>

            </form>
        </div>
        <div class="col-2"></div>
    </div>
@endsection
