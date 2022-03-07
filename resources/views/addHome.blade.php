@extends('master')
@section('content')

    <!-- ====== Page Header ====== -->
    <div class="page-header default-template-gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title">Apartments</h2>
                    <p class="page-description">Add new apartments </p>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row-->
        </div><!-- /.container-fluid -->
    </div><!-- /.page-header -->

    <!-- ====== Breadcrumbs Area ====== -->
    <div class="breadcrumbs-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <span class="first-item">
                         <a href="/home">Home</a></span>
                        <span class="separator">&gt;</span>
                        <span class="last-item">Apartments</span>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumbs-area -->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <p class="text-danger">TreasurelandTech homes reserves the right to charge house owners and also agents a 20% commission for
                    every client that they get matched to on TreasurelandTech homes website as a maintainance fee.
                </p>
                <form class="cd-form" method="POST" action="addApartment" enctype="multipart/form-data" >
                    @csrf
                    <p class="fieldset">
                        <label class="image-replace" for="title">Title</label>
                        <input type="text" class="full-width has-padding has-border" id="title" name="title" required autofocus placeholder="Apartment title">
                    </p>

                    <p class="fieldset">
                        <label class="image-replace" for="bedrooms">Bedrooms</label>
                        <input type="number" class="full-width has-padding has-border" min="1" id="bedroom" name="bedroom" required autofocus placeholder="Number of bedroom">
                    </p>

                    <p class="fieldset">
                        <label class="image-replace" for="bathroom">Bathroom</label>
                        <input type="number" class="full-width has-padding has-border" min="1" id="bathroom" name="bathroom" required autofocus placeholder="Number of Bathroom">
                    </p>

                    <p class="fieldset">
                        <label class="image-replace" for="category">Select Category</label>
                        <select name="category" required class="form-control">
                            <option selected disabled>  Select Category</option>
                            @foreach ($category as $cat)
                                <option value="{{$cat->name}}"> {{$cat->name}} </option>
                            @endforeach

                        </select>
                    </p>

                    <p class="fieldset">
                        <label class="image-replace" for="price">Price</label>
                        <input type="text" class="full-width has-padding has-border" id="price" name="price" required placeholder="Enter apartment price/rent per month and currency e.g $300">
                    </p>

                    <p class="fieldset">
                        <label class="image-replace" for="location">Location</label>
                        <input type="text" class="full-width has-padding has-border" id="location" name="location" required autofocus placeholder="Apartment Location">
                    </p>

                    <p class="fieldset">
                        <label class="image-replace" for="deposit">Number of deposit</label>
                        <input type="number" class="full-width has-padding has-border" min="1" id="deposit" name="deposit" required autofocus placeholder="Number of deposit for rent">
                    </p>

                    <p class="fieldset">
                        <label class="image-replace" for="type">Select Type</label>
                        <select name="type" required class="form-control">
                            <option selected disabled> select type</option>
                            <option value="rent"> Rent </option>
                            <option value="sale"> Sale </option>
                        </select>
                    </p>

                    <p class="fieldset">
                        <label class="image-replace" for="details">Apartment details</label>
                        <textarea name="details" placeholder="Enter apartment details that would be shown to users " col="5" class="form-controller"></textarea>
                    </p>


                    <div id="build" class="fieldset" style="margin-bottom: 3px">
                        <label class="image-replace" for="deposit">Apartment Image</label>
                        <input type="file" class="full-width has-padding has-border" min="0" id="image" name="image" required autofocus placeholder="Apartment Image">
                    </div>

                    <p class="fieldset">
                        <input type="button" type="hidden" id="addimg" class="form-control btn btn-info" value="add more image" />
                    </p>


                    <p class="fieldset">
                        <input class="full-width has-padding" type="submit" value="List new apartment">
                    </p>
                </form>

                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <script> 

        $(document).ready(function () {
            $('#addimg').hide();
        });

        $('#image').change(function () {
            if (this.value.replace(/\s/g, "") === "") {
                $('#addimg').hide();
            } else {
                $('#addimg').show();
            }
        });

        $(document).ready(function(){
        //$('.card').css('margin-top', 30);
            $('#addimg').click(function(e){
                e.preventDefault();
                let temp_html = '';
                    temp_html += '<div id="build" class="input-group" style="margin-bottom: 3px">  <input type="file" class="full-width has-padding has-border" required  name="image2[]" id="image" autofocus placeholder="Apartment Image">  <div class="input-group-btn"> <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>   </div> </div>';

                $('#build').append(temp_html);
            });
            $(document).on('click', '.remove', function () {
                $(this).closest('#build').remove();
            });
        });


    </script>
@endsection 
