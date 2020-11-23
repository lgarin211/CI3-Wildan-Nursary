<div class="container card">
    <div id="d"></div>
    <div id="d2"></div>
    <button onclick="dass()" id="kl">Generet New Json</button>
    <script>
        function dass(params) {
            var a = '<iframe src="https://shopee.co.id/api/v2/search_items/?limit=30&match_id=331253719&newest=0&order=desc&page_type=shop&version=2" id="fream" frameborder="0"></iframe>'
            var b = '<p class="btn-danger">Copy Tulisan dan Pastekan di bawah untuk Update Produk</p><form method="POST" action="<? base_url("/dagang/Vpdate") ?>"><input type="text" name="json"><button type="submit">Update Data</button></form></div>'
            document.getElementById('d').innerHTML = a;
            document.getElementById('d2').innerHTML = b;
            document.getElementById('kl').innerHTML = '';
        }
    </script>