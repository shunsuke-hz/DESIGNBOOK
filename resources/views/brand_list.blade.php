@extends('layouts.template')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center my-4">
        <p class="my-auto">ブランド一覧</p>
    </div>
    <table class="table table-hover">
        <tbody>
            @foreach($brands as $brand)
                <tr>
                    <td class="align-middle"><img src="/storage/{{ $brand->logo_image }}" width="50px" class="rounded-circle d-block mx-auto"></td>
<td class="align-middle m-auto">
  <h5 class="font-weight-bold m-auto text-center">{{ $brand->name }}</h5>
</td>
<td class="d-flex align-items-center m-auto">
  <p class="m-auto text-center d-flex align-items-center">{{ $brand->prefecture_name }}</p>
</td>
<td class="align-middle"><button type="button" class="btn btn-primary d-block mx-auto">follow</button></td>
</tr>
@endforeach
</tbody>
</table>
</div> --}}


<main role="main">
  <div class="content">
    <div class="container">

      <brand-list-component></brand-list-component>

    </div>
  </div>
</main>


@endsection
{{--
    今後改善したいこと
    1. S3からの画像表示
    2. ペジネーション
    3. 文字情報を縦並びにしてXDに近づける
    4. ソート可能にする
    5. フォローの実装
    6. Bootstrapの微調整
 --}}