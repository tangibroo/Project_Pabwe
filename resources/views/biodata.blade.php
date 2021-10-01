<!DOCTYPE html>
<html>
    <head>
        <title>Biodata's {{$nama}}</title>
    </head>
    <style type="text/css">
    </style>
    <body>
        <font face = "Arial">
        <table border="1" cellpadding="10" style="margin-left: auto; margin-right: auto">
            <tr align="center"> <header> 
                <th colspan="2" width="1024px"> <img src="logo del.png" height="80px" align="left"><h3 style="padding-top:10px"> Tugas Pabwe Tangido Halomoan Sinaga</h3></th>
            </header>
            </tr>
            <tr align="center"> <header> 
                
            </header>
            </tr>
            <tr> <article>
                <td width="750px">
                    <p><b>Tangido's Biodata</b></p>
                <ul type="none">
                        <img src="11S16036.jpg" height="120px"  align="right">
                        <p>Nama&emsp;&emsp;&emsp;&emsp;&emsp;: {{$nama}}</p>
                        <p>TTL&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: {{$ttl}}</p>
                        <p>Golongan Darah&ensp;: {{$goldar}}</p>
                        <p>NIK&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: {{$nik}}</p>
                        <p>Pekerjaan&emsp;&emsp;&emsp;: {{$pekerjaan}}</p>
                        <p>Status Vaksinasi : {{$statusvaksin}}</p>
                </ul>
                <ul>
                    @foreach($matkul as $m)
 
                     <li>{{ $m }}</li>
 
                    @endforeach
                </ul>
                </article>
                </td>
            <footer>    
            </tr>
            <tr align="center" width="1024px">
                <td colspan="2" width="1024px"> 
                    <p>Copyright @ PABWE-2021</p>
                </td>
            </tr>
            </footer>
        </table>
    </font>

    </body>    
</html>    