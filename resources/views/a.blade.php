<div class="row">
            <div class="col-sm-3">
                <form action="/importexcel" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" class="form-control" placeholder="Recipient's username"
                        aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-primary mt-3" type="submit" id="button-addon2">Import</button>
                </form>
            </div>
        </div>