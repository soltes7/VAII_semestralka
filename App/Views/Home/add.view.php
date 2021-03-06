<div class="container">
    <div class="row">
        <div class="col">
            <form method="post">
                <div class="form-group">
                    <label>Titulok</label>
                    <input name="title" type="text" class="form-control" required pattern="^[A-Z].*$">
                </div>
                <div class="form-group">
                    <label>Obsah</label>
                    <textarea name="content" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Odkaz</label>
                    <input name="url" type="text" class="form-control" required pattern="https?:\/\/(www\.)?[-a-zA-Z0-9@:%._\+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b([-a-zA-Z0-9()@:%_\+.~#?&//=]*)">
                </div>
                <div class="form-group">
                    <label>Autor</label>
                    <input name="author" type="text" class="form-control" required pattern="^[A-Z]([-']?[a-z]+)*( [A-Z]([-']?[a-z]+)*)+$">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>