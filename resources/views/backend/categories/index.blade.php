@extends('backend.layouts.master')
@section('title')
    Category All
@endsection

@section('main')

    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                        <h4>Categories List</h4>
                        @include('backend.comporment.btn',[
                        'name'=>'Create Category',
                        'color'=>'success',
                        'icon'=>'plus',
                        'link'=>'backend.category.create',
                        ])
                        <br> <br>
                        <div class="asset-inner">
                            <table>
                                <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name of Cate.</th>
                                        <th>Slug</th>
                                        <th>Time Created</th>
                                        <th>Time Updated</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>
                                                {{ $category->slug }}
                                            </td>
                                            <td>{{ $category->created_at->format('d/m/Y h:i:s') }}</td>
                                            <td>{{ $category->updated_at->format('d/m/Y h:i:s') }}</td>

                                            <td>
                                                <form
                                                    action="{{ route('backend.category.edit', [
    'category_id' => $category->id,
]) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('get')
                                                    <button data-toggle="tooltip" title="" class="pd-setting-ed"
                                                        data-original-title="Edit"> <i class="fa fa-pencil-square-o"
                                                            aria-hidden="true"></i></button>
                                                </form>
                                                <br>
                                                <form
                                                    action="{{ route('backend.category.destroy', ['category_id' => $category->id]) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button data-toggle="tooltip" title="" class="pd-setting-ed"
                                                        data-original-title="Trash"><i class="fa fa-trash-o"
                                                            aria-hidden="true"></i></button>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
