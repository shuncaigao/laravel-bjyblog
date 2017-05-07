@extends('layouts.admin')

@section('title', '文章列表')

@section('nav', '文章列表')

@section('description', '已发布的文章列表')

@section('content')

    <!-- 导航栏结束 -->
    <ul id="myTab" class="nav nav-tabs bar_tabs">
        <li class="active">
            <a href="{{ url('admin/article/index') }}">文章列表</a>
        </li>
        <li>
            <a href="{{ url('admin/article/create') }}">发布文章</a>
        </li>
    </ul>
    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th>文章id</th>
            <th>分类</th>
            <th>标题</th>
            <th>点击数</th>
            <th>发布时间</th>
            <th>操作</th>
        </tr>
        @foreach($article as $k => $v)
            <tr>
                <td>{{ $v->id }}</td>
                <td>{{ $v->category_name }}</td>
                <td>{{ $v->title }}</td>
                <td>{{ $v->click }}</td>
                <td>{{ $v->created_at }}</td>
                <td>
                    <a href="{{ url('admin/article/edit', [$v->id]) }}">编辑/详情</a>
                    |
                    <a href="{{ url('admin/article/destroy', [$v->id]) }}">删除</a>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="text-center">
        {{ $article->links() }}
    </div>

@endsection
