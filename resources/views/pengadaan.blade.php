<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.4/semantic.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.4/semantic.min.js"></script>
</head>
<body>

<div class="ui hidden divider"></div>
<div class="ui hidden divider"></div>

<div class="ui container">
    <div class="ui top attached menu">
        <div class="menu">
            <div class="item borderless">
                <h1>Pengadaan</h1>
            </div>
        </div>
        <div class="right menu">
            <div class="ui right aligned item">
                <form action="">
                    <div class="ui transparent icon input">
                        <input class="prompt" name="search" value="{{ request('search') }}" type="text" placeholder="Cari tender...">
                        <i class="search link icon"></i>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="ui segment attached fitted">
        <table class="ui very compact table bottom small sortable">
            <thead>
            <tr>
                @sortby('nama_tender')
                @sortby('kode_paket')
                @sortby('unit')
                @sortby('satker')
                @sortby('pagu')
                @sortby('tahap_saat_ini')
                @sortby('tgl_mulai')
                @sortby('tgl_selesai')
                @sortby('metode')
            </tr>
            </thead>
            <tbody>
            @forelse($tender as $item)
                <?php $item = $item->presenter()['data'];?>
                <tr>
                    <td><a href="{{ $item['sumber'] }}" target="_blank">{{ $item['nama_tender'] }}</a></td>
                    <td>{{ $item['kode_paket'] }}</td>
                    <td>{{ $item['unit'] }}</td>
                    <td>{{ $item['satker'] }}</td>
                    <td><div class="ui label">{{ number_format($item['pagu'], 0, ',', '.') }}</div></td>
                    <td>{{ $item['tahap_saat_ini'] }}</td>
                    <td>{{ $item['tgl_mulai'] }}</td>
                    <td>{{ $item['tgl_selesai'] }}</td>
                    <td>{{ $item['metode'] }}</td>
                </tr>
            @empty
                <tr><td colspan="9" class="warning center aligned" style="font-size: 1.5rem;padding:40px;font-style: italic">Data tidak tersedia</td></tr>
            @endforelse
            </tbody>
        </table>
    </div>
    <div class="ui menu bottom attached">
        <div class="item borderless">
            <small>{!! with(new \Laravolt\Support\Pagination\SemanticUiPagination($tender))->summary() !!}</small>
        </div>
        {!! with(new \Laravolt\Support\Pagination\SemanticUiPagination($tender))->render('attached bottom right') !!}
    </div>

</div>

</div>

<div class="ui hidden divider"></div>
<div class="ui hidden divider"></div>

</body>
</html>
