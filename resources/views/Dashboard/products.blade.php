@extends('layouts.updash')

@section('content')
<div class="modal" tabindex="-1" id="delete">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">رسالة تأكيد</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>هل انت متأكد من رغبتك لحذف هذا المنتج ؟</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء الامر</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="confirm()">حذف</button>
      </div>
    </div>
  </div>
</div>


<div class="modal" tabindex="-1" id="addproducts">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">إضافة منتج</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{route('Create_newProduct')}}">
            <div class="row">
                <div class="col">
                    <label for="productname" class="form-label"> اسم المنتج</label>
                    <input type="text" class="form-control p-2" name="productname" id="productname">
                </div>
                <div class="col">
                    <label for="Description"  class="form-label"> وصف المنتج</label>
                    <input type="text" class="form-control p-2" name="Description" id="Description">
                </div>
            </div>
            
            <div class="row mt-3">
                <div class="col">
                    <button type="submit" class="btn btn-success">حفظ</button>
                </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<div class="container">
    <div class="row mt-5">
        <div class="col">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addproducts">
                اضافة
              </button>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table">

                    <thead>
                        <tr>
                            <th>رقم المنتج </th>
                            <th>اسم المنتج </th>
                            <th>وصف المنتج </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($prod as $items )
                        
                        <tr>
                            <td>
                                {{$items->id}}
                            </td>
                            <td>
                                {{$items->name}}
                            </td>
                            <td>
                            {{$items->Description}}
                            </td>
                            <td><a href="#" onclick="lunch({{$items->id}})"><i class="bi bi-trash text-danger"></i></a></td>
                            <td><a href='{{route('edit',['id'=>$items->id])}}'><i class="bi bi-pencil-square text-success"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection