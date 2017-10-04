@extends('master.master')
@section('page_title')
    <title>Library | Contact</title>
@endsection

@section('content')
    <div class="container col-md-12" align="center" style="margin-top: 120px">
    <div>
        <div class="col-md-12">
            Contact us  Feel free to contact us

        </div>

        <div class="col-md-8">
            <form action="" method="post">
                <div class="form-group col-md-4">
                    <label for="name"></label>
                    <input class="form-control" type="text" name="name" id="name">

                </div>


                <div class="form-group col-md-4">
                    <label for="description">Description:</label>
                    <textarea class="form-control" id="description" placeholder="brief description of the content, which may include its use and target audience"></textarea>
                </div>





            </form>


        </div>
        <div class="col-md-2">
            <div >Our Office</div>
            <hr>
            <span class="subgroup"> Winexviv International LTD.</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus illo praesentium totam vel velit. Atque aut doloribus eius fugit vel voluptas voluptatum! Id ipsum iusto magnam. Animi minima perspiciatis quo.</p>

            <span class="subgroup"> Contact Help :)</span>
            <a href="_mailto_"> sitehelp@winexviv.com</a>
        </div>



            <label for="description">Description:</label>
            <textarea class="form-control" id="description" placeholder="brief description of the content, which may include its use and target audience"></textarea>






    </div>





    </div>

    @endsection