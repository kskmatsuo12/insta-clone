@extends('layouts.app')

@section('content')
<div style="width:50%; margin: 0 auto; text-align:center;">
    <form action="{{ route('post.store') }}" method="POST">
    @csrf
        <div>
            名前：
            <input name="name" value="{{ old('name') }}" placeholder="名前の入力欄"/>
        </div>
        <div>
            タイトル：
            <input name="title" placeholder="タイトルの入力欄"/>
        </div>
        <div>
            <textarea name="content" placeholder="内容の入力"></textarea>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <button>送信</button>
    </form>
</div>
@endsection