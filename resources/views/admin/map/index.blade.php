@extends('admin.layout')

@section('title')
    Հասցեներ
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 d-flex">
                    <h1 class="m-0">Բոլոր Հասցեները</h1>
                    <a href="{{ route('map.create') }}" class="btn btn-outline-primary mx-2">Ավելացնել +</a>
                </div><!-- /.col -->
            </div><!-- /.row -->

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body p-0">
                    <div id="map" style="width:900px; height:580px; margin-bottom: 20px"></div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
@endsection
@section('scripts')
<script>
      var mapOptions = {
            center: [40.21452640742982, 44.52145498531859],
            zoom: 10
         }
         // Creating a map object
         var map = new L.map('map', mapOptions);

         // Creating a Layer object
         var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');

         // Adding layer to the map
         map.addLayer(layer);

         $.ajax({
            url: '/markers',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                $.each(data, function(index, element) {
                    var marker = L.marker([element.latitude, element.longitude]).addTo(map);
                    marker.bindPopup(element.address);
                });
            }
        });
</script>
@endsection
