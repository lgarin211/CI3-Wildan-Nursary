<div class="container card">
    <div id="d">
        <div class="col-md-12 text-center alert-success">
            <? if (!empty($_SESSION['dokan'])) {
                echo $_SESSION['dokan'];
            } ?>
        </div>
    </div>
    <div id="d2"></div>
    <div id="kl" class="col-md-12">
        <button class="col-md-12 btn btn-warning" onclick="dass()">Generet New Json</button>
    </div>

<button onclick="sin()">sim</button>
    <script>
        function dass(params) {
            var a = '<iframe class="col-md-12" src="https://shopee.co.id/api/v2/search_items/?limit=30&match_id=331253719&newest=0&order=desc&page_type=shop&version=2" id="fream" frameborder="0"></iframe>'
            var b = '<p class="alert-danger">Copy Tulisan dan Pastekan di bawah untuk Update Produk</p><form method="POST" action="<? base_url("/dagang/Vpdate") ?>"><input type="text" name="json"><button type="submit">Update Data</button></form></div>'
            document.getElementById('d').innerHTML = a;
            document.getElementById('d2').innerHTML = b;
            document.getElementById('kl').innerHTML = '';
        }

        function sin(params) {
            alert(
                document.getElementsByTagName('<pre>').innerHTML
            )
        }
    </script>
</div>
</div>