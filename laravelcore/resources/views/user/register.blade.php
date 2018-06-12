<style>
    .col-sm-6 table{
        width: 100%;
    }
    .col-sm-6 table tr td label{
        float: right;

    }
    .col-sm-6  table tr td input[type='text']{
        float: right;
        padding: 5px !important;
        margin: 10px;
        margin-top: -5px;
        width: 100%;
    }
    .col-sm-6  table tr td input[type='tel']{
        float: right;
        padding: 5px !important;
        margin: 10px;
        margin-top: -5px;
        width: 100%;
    }

</style>
{{ Form::open(array('url' => 'user/form/register', 'method' => 'post', 'files' => true)) }}
        <div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #0cb673 !important; color: white">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h3 class="modal-title" id="exampleModalLongTitle" style="text-align: right;margin-right: 20px;">ثبت نام</h3>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid" style="direction: rtl">
                            <div class="row" >
                                <div class="col-sm-6">
                                    <table style="direction: rtl">
                                        <tr>
                                            <td><label>جنسیت</label>
                                            </td>
                                            <td>
                                                {{ Form::radio('gender', '0',true,['style'=>'float:right']) }} {{ Form::label('gender', 'زن',['style'=>'float:right']) }}
                                                {{ Form::radio('gender', '1',false,['style'=>'float:right ; margin-right:10px']) }} {{ Form::label('gender', 'مرد',['style'=>'float:right']) }}
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-sm-6">
                                    <table style="direction: rtl">
                                        <tr>
                                            <td><label>نام</label></td>
                                            <td>
                                                {{ Form::text('name','',['class' => 'form-control', 'required']) }}
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <table style="direction: rtl">
                                        <tr>
                                            <td><label>مقطع تحصیلی</label></td>
                                            <td>
                                                {{ Form::select('grade', array('زیر دیپلم' => 'زیر دیپلم', 'دیپلم' => 'دیپلم' ,'فوق دیپلم' => 'فوق دیپلم','لیسانس' => 'لیسانس','فوق لیسانس' => 'فوق لیسانس','دکترا' => 'دکترا'),'',['class'=>'form-control','style' =>' height: 40px !important;padding:0px !important']) }}
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-sm-6">
                                    <table style="direction: rtl">
                                        <tr>
                                            <td><label>نام خانوادگی</label></td>
                                            <td>
                                                {{ Form::text('family','',['class' => 'form-control', 'required']) }}
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <table style="direction: rtl">
                                        <tr>
                                            <td><label>معرف</label></td>
                                            <td>
                                                {{ Form::select('reagent', array('زیر دیپلم' => 'زیر دیپلم', 'دیپلم' => 'دیپلم' ,'فوق دیپلم' => 'فوق دیپلم','لیسانس' => 'لیسانس','فوق لیسانس' => 'فوق لیسانس','دکترا' => 'دکترا'),'',['class'=>'form-control','style' =>' height: 40px !important;padding:0px !important']) }}
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-sm-6">
                                    <table style="direction: rtl">
                                        <tr>
                                            <td><label>نام پدر</label></td>
                                            <td>
                                                {{ Form::text('father','',['class' => 'form-control', 'required']) }}
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <table style="direction: rtl">
                                        <tr>
                                            <td><label>همراه پدر</label></td>
                                            <td>
                                                {{ Form::tel('fatherPhone','',['class' => 'form-control', 'required']) }}
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-sm-6">
                                    <table style="direction: rtl">
                                        <tr>
                                            <td><label>شماره ملی</label></td>
                                            <td>
                                                {{ Form::text('nationalCode','',['class' => 'form-control', 'required']) }}
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <table style="direction: rtl">
                                        <tr>
                                            <td><label>شماره تلفن ضروری</label></td>
                                            <td>
                                                {{ Form::tel('emergencyPhone','',['class' => 'form-control', 'required']) }}
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-sm-6">
                                    <table style="direction: rtl">
                                        <tr>
                                            <td><label>تاریخ تولد</label></td>
                                            <td>
                                                {{ Form::text('birthday','',['class' => 'form-control','id'=>'birthday', 'required']) }}
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <table style="direction: rtl">
                                        <tr>
                                            <td><label>آدرس منزل</label></td>
                                            <td>
                                                {{ Form::text('homeAddress','',['class' => 'form-control', 'required']) }}
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-sm-6">
                                    <table style="direction: rtl">
                                        <tr>
                                            <td><label>تلفن ثابت منزل</label></td>
                                            <td>
                                                {{ Form::tel('homePhone','',['class' => 'form-control', 'required']) }}
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <table style="direction: rtl">
                                        <tr>
                                            <td><label>آدرس محل کار پدر</label></td>
                                            <td>
                                                {{ Form::text('fatherWorkAddress','',['class' => 'form-control', 'required']) }}
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-sm-6">
                                    <table style="direction: rtl">
                                        <tr>
                                            <td><label>شماره همراه هنرجو</label></td>
                                            <td>
                                                {{ Form::tel('studentPhone','',['class' => 'form-control', 'required']) }}
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <table style="direction: rtl">
                                        <tr>
                                            <td><label>شماره بیمه ورزشی</label></td>
                                            <td>
                                                {{ Form::text('sportsInsuranceNumber','',['class' => 'form-control', 'required']) }}
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-sm-6">
                                    <table style="direction: rtl">
                                        <tr>
                                            <td><label>نحوه آشنایی با آکادمی</label></td>
                                            <td>

                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    {{ Form::text('sickness','',['class' => 'form-control', 'required']) }}
                                </div>
                                <div class="col-sm-6">
                                    <label>در صورت داشتن بیماری نوع آن را ذکر کنید</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <br>
                                {{ Form::submit('ثبت نام',['class'=>'btn btn-info','style'=>'float: left ; border-radius: 0px']) }}
                                    <button class="btn btn-success" data-dismiss="modal"   data-toggle="modal" data-target="#exampleModalLong3" style="float: left ; border-radius: 0px" type="button">قبلا عضو بودم ( ورود)</button>
                                </div>
                                <div class="col-sm-6">

                                       <a href="" class="btn btn-default">
                                           <span style="position: absolute ; text-align: center ; width: 70px ; float: right ; margin-right: -30px">
                                               سابقه بیمه</span>
                                           {{ Form::file('image1' ,['style'=>'opacity:0 ; width:70px', 'required']) }}
                                       </a>
                                    <a href="" class="btn btn-default">
                                        <span style="position: absolute ; text-align: center ; width: 70px ; float: right ; margin-right: -30px">
                                            کارت ملی</span>
                                        {{ Form::file('image2' ,['style'=>'opacity:0 ; width:70px', 'required']) }}
                                    </a>
                                    <a href="" class="btn btn-default">
                                        <span style="position: absolute ; text-align: center ; width: 70px ; float: right ; margin-right: -30px">شناسنامه
                                        </span>
                                        {{ Form::file('image3' ,['style'=>'opacity:0 ; width:70px', 'required']) }}
                                    </a>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>
{{ Form::close() }}
<link rel="stylesheet" href="js/jspc-gray.css">
<script type="text/javascript" src="js/js-persian-cal.min.js"></script>
<script>
    var objCal1 = new AMIB.persianCalendar( 'birthday' );
</script>


{{ Form::open(array('url' => 'user/form/login', 'method' => 'post', 'files' => true)) }}
<div class="modal fade" id="exampleModalLong3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #0cb673 !important; color: white">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h3 class="modal-title" id="exampleModalLongTitle" style="text-align: right;margin-right: 20px;">ورود</h3>
            </div>
            <div class="modal-body">
                <div class="container-fluid" style="direction: rtl">
                    <table style="direction: rtl ; width: 100%">
                        <tr>
                            <td><label>شماره همراه هنرجو</label></td>
                            <td>
                                {{ Form::tel('studentPhone','',['class' => 'form-control', 'required']) }}
                            </td>
                        </tr>
                        <tr >
                            <td><br/><label>شماره ملی</label></td>
                            <td>
                                {{ Form::text('nationalCode','',['class' => 'form-control', 'required']) }}
                            </td>
                        </tr>
                    </table>

                    {{ Form::submit('ورود',['class'=>'btn btn-info','style'=>'float: left ; border-radius: 0px']) }}
                    <button class="btn btn-success" data-dismiss="modal"   data-toggle="modal" data-target="#exampleModalLong2" style="float: left ; border-radius: 0px" type="button">بازگشت به صفحه ثبت نام</button>
                </div>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
{{ Form::close() }}