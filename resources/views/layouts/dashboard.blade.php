@extends('layouts.master')

@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <br>  <h1>
        Input Data
        <small></small>
      </h1>
      <br/>
      <div class="form-row">
        <div class="col-md-6 form-group">
         <div class="heading">
           Jenis Fasilitas Kesehatan*
         </div>
         <select name="department" id="department" class="form-control">
          <option value="Rumah Sakit">Rumah Sakit</option>
          <option value="Klinik">Klinik</option>
          <option value="Puskesmas">Puskesmas</option>
          <option value="Lab">Lab</option>
        </select>
        </div>
        <div class="col-md-6 form-group">
         <div class="heading">
          Nama fasilitas Kesehatan
         </div>
         <input type="tel" class="form-control" name="phone" id="phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
         <div class="validate"></div>
        </div>
        <div class="col-md-6 form-group">
         <div class="heading">
           Jenis Tes Yang Tersedia
         </div>
         <select name="doctor" id="doctor" class="form-control">
          <option value="Rapid">Rapid</option>
          <option value="PCR/Swab">PCR/Swab</option>
        </select>
           <div class="validate"></div> 
        </div>
        <div class="col-md-6 form-group">
         <div class="heading">
          Harga
         </div>
         <input type="tel" class="form-control" name="phone" id="phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
         <div class="validate"></div>
        </div>
        <div class="col-md-6 form-group">
         <div class="heading">
           Nomor Telpon
         </div>
         <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
         <div class="validate"></div>
         <div class="validate"></div>
        </div>
        <div class="col-md-6 form-group">
         <div class="heading">
           Alamat
         </div>
         <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
         <div class="validate"></div>
        </div>
          <br>
          <div class="container-contact100-form-btn">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15864.151910022165!2d106.8286532!3d-6.2587279!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe8504d049a19822d!2sParahita%20Diagnostic%20Center!5e0!3m2!1sid!2sid!4v1601355416921!5m2!1sid!2sid" width="300" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <br>
            <button class="contact100-form-btn">
            <span>
            Submit
            <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
            </span>
            <br>
            </button>
          
           
    <!-- Main content -->
    
    <!-- /.content -->
  </div>
@endsection