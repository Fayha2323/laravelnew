<form action="{{route('store_kurang')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="">angka1</label>
        <input type="text" name="angka1">
    </div>
    <div class="form-group">
        <label for="">angka2</label>
        <input type="text" name="angka2">
    </div>
    <div class="form-group">
        <button type="submit">Kurang</button>
    </div>
</form>
<!-- <h1>Jumlahnya adalah : @php echo $jumlah @endhp </h1> -->
 <h1> pengurangannya adalah : {{$kurang}}</h1>