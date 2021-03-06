@extends('layouts.user')

@section('title', '模板管理')
@section('user-content')

    <table class="table table-hover wz-message-table">
        <thead>
        <tr>
            <th>更新时间</th>
            <th>类型</th>
            <th>名称</th>
            <th>描述</th>
        </tr>
        </thead>
        <tbody>
        @forelse($templates as $temp)
            <tr>
                <td>{{ $temp->updated_at->format('Y-m-d H:i') }}</td>
                <td>{{ $temp->type == 1 ? 'Swagger' : 'Markdown' }}</td>
                <td>
                    {{ $temp->name }}
                </td>
                <td>{{ $temp->description }}</td>
            </tr>
        @empty
            <tr>
                <td class="text-center" colspan="4">没有符合条件的信息！</td>
            </tr>
        @endforelse
        </tbody>
    </table>

@endsection
