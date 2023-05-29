<div class="container">
    <h1>教員登録画面の編集test</h1>
    <form method="POST" action="{{route('teachers.update',$teacher->id)}}" >
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="login_id"> ログインID</label>
            <input type="text" name="login_id" id="login_id" class="form-control" value="{{$teacher['login_id']}}" placeholder="ログインIDを入力してください">
        </div>
        <div class="form-group">
            <label for="user_name">ユーザーネーム</label>
            <input type="text" name="user_name" id="user_name" class="form-control" value="{{$teacher['user_name']}}" placeholder="ユーザーネームを入力してください">
        </div>
        <input type="submit" value="決定" class="btn btn-primary">
        <input type="reset" value="戻る" class="btn btn-secondary" onclick='window.history.back(-1);'>
    </form>
</div>
