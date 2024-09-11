<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">
        input[type='text']{
            height: 40px;
            width: 350px;
        }
        .div_deg{
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 30px;
        }
        table{
          border: 4px solid yellowgreen;
          margin-top: 40px;
          text-align: center;
          margin: auto;
          color: white;
          width: 300px;
        }
        th{
          background-color: blueviolet;
          font-size: 20px;
          font-weight: bold;
          padding: 5px;
          color: white;
        }
        td{
          border: 1px solid white;
          font-size: 18px;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <header class="header">   
    @include('admin.header')
    </header>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
    <div class="page-content">
      <div class="page-header">
        <div class="container-fluid">
          <h2 class="h5 no-margin-bottom">Category Addition</h2>
        </div>
      </div>
      <div class="div_deg">
        <form action="{{url('add_category')}}" method="post">
            @csrf
            <input type="text" placeholder="Category name" name="category_name_input">
            <input type="submit" class="btn btn-primary" value="Add Category">
        </form>
      </div>
      <div>
        <table>
          <tr>
            <th>Category Name</th>
          </tr>
          @if(count($data) == 0)
            <tr>
              {{-- <td>No data present</td> --}}
              <td>            
                <div class="spinner-border text-warning" role="status">
                <span class="visually-hidden">Loading...</span>
              </div></td>
            </tr>
          @else
            @foreach ($data as $data)
              <tr>
                <td>{{$data->category_name}}</td>
              </tr>
            @endforeach
          @endif
        </table>
      </div>
  </div>
    <footer class="footer">
      <div class="footer__block block no-margin-bottom">
        <div class="container-fluid text-center">
          <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
           <p class="no-margin-bottom">2018 &copy; Your company. Download From <a target="_blank" href="https://templateshub.net">Templates Hub</a>.</p>
        </div>
      </div>
    </footer>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('admincss/js/front.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    @if (Session::has('message'))
        <script>
          toastr.options = {
           "progressBar" : true,
           "closeButton" : true,
          }
          toastr.success("{{Session::get('message')}}", 'Success!',{timeOut:2000})
        </script>

      
    @endif
  </body>
</html>