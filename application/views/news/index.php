<div class="container" style="margin-top: 15%; width:50rem; margin-right: center">
    <div class="row table-responsive">
        <form action="<?= base_url('News/berita');?>" method="get" width="20">
            <div class="input-group">
                <select class="custom-select" name="kategori" id="inputGroupSelect04" style="width: 15rem;">
                    <option value="businnes">Businnes</option>
                    <option value="entertaiment">Entertaiment</option>
                    <option value="health">Health</option>
                    <option value="science">Science</option>
                    <option value="sports">Sports</option>
                    <option value="technology">Technology</option>
                </select>
                <div class="input-group-append">
                    <button class="btn btn-outline-dark" type="submit">Button</button>
                </div>
            </div>
        </form>
    </div>
</div>