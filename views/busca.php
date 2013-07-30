<!DOCTYPE html>
<html lang="en">
  <head>
    
    <?php include_once('includes/head.php') ?>

  </head>

  <body>
    <?php include_once('includes/navbar.php') ?>

    <div class="container">
      <h1>Conheça o Autocloud</h1>
      <p class="lead">Compre e venda veículos novos e usados</p>
      <div class="row-fluid">
        <div class="span4 well buscar-veiculo">
          <h3>Comprar</h3>
          <div class="btn-group" data-toggle="buttons-radio">
            <button type="button" id="tipo_veiculo" value="1" class="tipo_veiculo btn active">Carro</button>
            <button type="button" id="tipo_veiculo" value="2" class="tipo_veiculo btn ">Moto</button>
          </div>
          <form class="form-horizontal" method="GET" action="<?=base_url()?>busca">
            
            <div class="control-group">
              <label class="control-label" for="inputEmail">Marca</label>
              <div class="controls">
                <select class="span12" name="fabricante" id="fabricante" disabled>
                  <option></option>
                </select>
              </div>
              
            </div>
            <div class="control-group">
              <label class="control-label" for="inputPassword">Modelo</label>
              <div class="controls">
                <select class="span12" name="modelo" id="modelo" disabled>
                  <option></option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="inputPassword">Ano</label>
              <div class="controls">
                <select class="span6" name="anoDe" id="anoDe">
                  <option></option>
                  <option value="2014">2014</option>
                  <option value="2013">2013</option>
                  <option value="2012">2012</option>
                  <option value="2011">2011</option>
                  <option value="2010">2010</option>
                  <option value="2009">2009</option>
                  <option value="2008">2008</option>
                  <option value="2007">2007</option>
                  <option value="2006">2006</option>
                  <option value="2005">2005</option>
                  <option value="2004">2004</option>
                  <option value="2003">2003</option>
                  <option value="2002">2002</option>
                  <option value="2001">2001</option>
                  <option value="2000">2000</option>
                  <option value="1999">1999</option>
                  <option value="1998">1998</option>
                  <option value="1997">1997</option>
                  <option value="1996">1996</option>
                  <option value="1995">1995</option>
                  <option value="1994">1994</option>
                  <option value="1993">1993</option>
                  <option value="1992">1992</option>
                  <option value="1991">1991</option>
                  <option value="1990">1990</option>
                  <option value="1989">1989</option>
                  <option value="1988">1988</option>
                  <option value="1987">1987</option>
                  <option value="1986">1986</option>
                  <option value="1985">1985</option>
                  <option value="1984">1984</option>
                  <option value="1983">1983</option>
                  <option value="1982">1982</option>
                  <option value="1981">1981</option>
                  <option value="1980">1980</option>
                  <option value="1979">1979</option>
                  <option value="1978">1978</option>
                  <option value="1977">1977</option>
                  <option value="1976">1976</option>
                  <option value="1975">1975</option>
                  <option value="1974">1974</option>
                  <option value="1973">1973</option>
                  <option value="1972">1972</option>
                  <option value="1971">1971</option>
                  <option value="1970">1970</option>
                  <option value="1969">1969</option>
                  <option value="1968">1968</option>
                  <option value="1967">1967</option>
                  <option value="1966">1966</option>
                  <option value="1965">1965</option>
                  <option value="1964">1964</option>
                  <option value="1963">1963</option>
                  <option value="1962">1962</option>
                  <option value="1961">1961</option>
                  <option value="1960">1960</option>
                  <option value="1959">1959</option>
                  <option value="1958">1958</option>
                  <option value="1957">1957</option>
                  <option value="1956">1956</option>
                  <option value="1955">1955</option>
                  <option value="1954">1954</option>
                  <option value="1953">1953</option>
                  <option value="1952">1952</option>
                  <option value="1951">1951</option>
                  <option value="1950">1950</option>
                  <option value="1949">1949</option>
                  <option value="1948">1948</option>
                  <option value="1947">1947</option>
                  <option value="1946">1946</option>
                  <option value="1945">1945</option>
                  <option value="1944">1944</option>
                  <option value="1943">1943</option>
                  <option value="1942">1942</option>
                  <option value="1941">1941</option>
                  <option value="1940">1940</option>
                  <option value="1939">1939</option>
                  <option value="1938">1938</option>
                  <option value="1937">1937</option>
                  <option value="1936">1936</option>
                  <option value="1935">1935</option>
                  <option value="1934">1934</option>
                  <option value="1933">1933</option>
                  <option value="1932">1932</option>
                  <option value="1931">1931</option>
                  <option value="1930">1930</option>
                  <option value="1929">1929</option>
                  <option value="1928">1928</option>
                  <option value="1927">1927</option>
                  <option value="1926">1926</option>
                  <option value="1925">1925</option>
                  <option value="1924">1924</option>
                  <option value="1923">1923</option>
                  <option value="1922">1922</option>
                  <option value="1921">1921</option>
                  <option value="1920">1920</option>
                  <option value="1919">1919</option>
                  <option value="1918">1918</option>
                  <option value="1917">1917</option>
                  <option value="1916">1916</option>
                  <option value="1915">1915</option>
                  <option value="1914">1914</option>
                  <option value="1913">1913</option>
                  <option value="1912">1912</option>
                  <option value="1911">1911</option>
                  <option value="1910">1910</option>
                  <option value="1909">1909</option>
                  <option value="1908">1908</option>
                  <option value="1907">1907</option>
                  <option value="1906">1906</option>
                  <option value="1905">1905</option>
                  <option value="1904">1904</option>
                  <option value="1903">1903</option>
                  <option value="1902">1902</option>
                  <option value="1901">1901</option>
                  <option value="1900">1900</option>
                  <option value="1899">1899</option>
                  <option value="1898">1898</option>
                  <option value="1897">1897</option>
                  <option value="1896">1896</option>
                  <option value="1895">1895</option>
                  <option value="1894">1894</option>
                  <option value="1893">1893</option>
                  <option value="1892">1892</option>
                  <option value="1891">1891</option>
                  <option value="1890">1890</option>
                  <option value="1889">1889</option>
                  <option value="1888">1888</option>
                  <option value="1887">1887</option>
                  <option value="1886">1886</option>
                  <option value="1885">1885</option>
                  <option value="1884">1884</option>
                  <option value="1883">1883</option>
                  <option value="1882">1882</option>
                  <option value="1881">1881</option>
                </select>
                <select class="span6" name="anoAte" id="anoAte">
                  <option></option>
                  <option value="2014">2014</option>
                  <option value="2013">2013</option>
                  <option value="2012">2012</option>
                  <option value="2011">2011</option>
                  <option value="2010">2010</option>
                  <option value="2009">2009</option>
                  <option value="2008">2008</option>
                  <option value="2007">2007</option>
                  <option value="2006">2006</option>
                  <option value="2005">2005</option>
                  <option value="2004">2004</option>
                  <option value="2003">2003</option>
                  <option value="2002">2002</option>
                  <option value="2001">2001</option>
                  <option value="2000">2000</option>
                  <option value="1999">1999</option>
                  <option value="1998">1998</option>
                  <option value="1997">1997</option>
                  <option value="1996">1996</option>
                  <option value="1995">1995</option>
                  <option value="1994">1994</option>
                  <option value="1993">1993</option>
                  <option value="1992">1992</option>
                  <option value="1991">1991</option>
                  <option value="1990">1990</option>
                  <option value="1989">1989</option>
                  <option value="1988">1988</option>
                  <option value="1987">1987</option>
                  <option value="1986">1986</option>
                  <option value="1985">1985</option>
                  <option value="1984">1984</option>
                  <option value="1983">1983</option>
                  <option value="1982">1982</option>
                  <option value="1981">1981</option>
                  <option value="1980">1980</option>
                  <option value="1979">1979</option>
                  <option value="1978">1978</option>
                  <option value="1977">1977</option>
                  <option value="1976">1976</option>
                  <option value="1975">1975</option>
                  <option value="1974">1974</option>
                  <option value="1973">1973</option>
                  <option value="1972">1972</option>
                  <option value="1971">1971</option>
                  <option value="1970">1970</option>
                  <option value="1969">1969</option>
                  <option value="1968">1968</option>
                  <option value="1967">1967</option>
                  <option value="1966">1966</option>
                  <option value="1965">1965</option>
                  <option value="1964">1964</option>
                  <option value="1963">1963</option>
                  <option value="1962">1962</option>
                  <option value="1961">1961</option>
                  <option value="1960">1960</option>
                  <option value="1959">1959</option>
                  <option value="1958">1958</option>
                  <option value="1957">1957</option>
                  <option value="1956">1956</option>
                  <option value="1955">1955</option>
                  <option value="1954">1954</option>
                  <option value="1953">1953</option>
                  <option value="1952">1952</option>
                  <option value="1951">1951</option>
                  <option value="1950">1950</option>
                  <option value="1949">1949</option>
                  <option value="1948">1948</option>
                  <option value="1947">1947</option>
                  <option value="1946">1946</option>
                  <option value="1945">1945</option>
                  <option value="1944">1944</option>
                  <option value="1943">1943</option>
                  <option value="1942">1942</option>
                  <option value="1941">1941</option>
                  <option value="1940">1940</option>
                  <option value="1939">1939</option>
                  <option value="1938">1938</option>
                  <option value="1937">1937</option>
                  <option value="1936">1936</option>
                  <option value="1935">1935</option>
                  <option value="1934">1934</option>
                  <option value="1933">1933</option>
                  <option value="1932">1932</option>
                  <option value="1931">1931</option>
                  <option value="1930">1930</option>
                  <option value="1929">1929</option>
                  <option value="1928">1928</option>
                  <option value="1927">1927</option>
                  <option value="1926">1926</option>
                  <option value="1925">1925</option>
                  <option value="1924">1924</option>
                  <option value="1923">1923</option>
                  <option value="1922">1922</option>
                  <option value="1921">1921</option>
                  <option value="1920">1920</option>
                  <option value="1919">1919</option>
                  <option value="1918">1918</option>
                  <option value="1917">1917</option>
                  <option value="1916">1916</option>
                  <option value="1915">1915</option>
                  <option value="1914">1914</option>
                  <option value="1913">1913</option>
                  <option value="1912">1912</option>
                  <option value="1911">1911</option>
                  <option value="1910">1910</option>
                  <option value="1909">1909</option>
                  <option value="1908">1908</option>
                  <option value="1907">1907</option>
                  <option value="1906">1906</option>
                  <option value="1905">1905</option>
                  <option value="1904">1904</option>
                  <option value="1903">1903</option>
                  <option value="1902">1902</option>
                  <option value="1901">1901</option>
                  <option value="1900">1900</option>
                  <option value="1899">1899</option>
                  <option value="1898">1898</option>
                  <option value="1897">1897</option>
                  <option value="1896">1896</option>
                  <option value="1895">1895</option>
                  <option value="1894">1894</option>
                  <option value="1893">1893</option>
                  <option value="1892">1892</option>
                  <option value="1891">1891</option>
                  <option value="1890">1890</option>
                  <option value="1889">1889</option>
                  <option value="1888">1888</option>
                  <option value="1887">1887</option>
                  <option value="1886">1886</option>
                  <option value="1885">1885</option>
                  <option value="1884">1884</option>
                  <option value="1883">1883</option>
                  <option value="1882">1882</option>
                  <option value="1881">1881</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="inputPassword">Estado</label>
              <div class="controls">
                <select class="span12" name="estado" id="estado">
                  <option></option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="inputPassword">Cidade</label>
              <div class="controls">
                <select class="span12" name="cidade" id="cidade" disabled>
                  <option></option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                  <input type="hidden" id="TipoVeiculo" name="TipoVeiculo" value="">
                <button type="submit" class="btn btn-primary btn-large pull-right">Buscar</button>
              </div>
            </div>
          </form>
        </div>
        <div class="span8">
            <h2>Resultado da busca</h2>
          
            <div class="row-fluid resultados-busca">
            <?php
            foreach ($array_busca as $row) {
                  $array_imagens = $this->imagens_anuncio->lista_prateleira($row->TB_Anunciante_id, $row->TB_Anuncio_id);
                  ?>
                  <div class="row-fluid item">
                        <div class="span3">
                              <a href="#" class="fotos">
                              <?php
                              $i=1;
                              foreach ($array_imagens as $image) {
                              ?>
                                    <div id="foto<?=$i?>">
                                          <img src="<?=base_url()?>uploads/thumb_<?=$image->ImageSRC?>">
                                    </div>
                              <?php
                              $i++;
                              }
                              ?>
                              </a>
                        </div>
                        <div class="span4">
                              <a href="#">
                                   <h4 class="titulo"><?=$row->Titulo?> <?=$row->Transmissao?></h4>
                                   <p class="versao"><?=$row->Versao?></p>
                              </a>
                              <p class="preco"><strong>R$ <?=$this->moedas->eua2bra($row->ValorVenda)?></strong></p>
                              <p><a href="#">Ver anúncio completo</a></p>
                        </div>
                        <div class="span2">
                              <p class="ano"><strong><?=$row->AnoFab?> / <?=$row->AnoMod?></strong></p>
                              <p class="km"><strong>95000km</strong></p>
                        </div>
                        <div class="span3 localidade">
                              <p><?=$row->TB_Cidade_Nome?></p>
                              <p><?=$row->TB_Estado_Nome?></p>
                              <p>Rafael Villa-Verde</p>
                              <p><?=$row->TelContato?></p>
                        </div>
                  </div>
            <?php
            }
            ?>
            

            </div>
        </div>
      </div>
      
      

      <?php include_once('includes/footer.php') ?>
    </div> <!-- /container -->


    <?php include_once('includes/scripts_footer.php') ?>
    <script src="<?=base_url()?>applications/portal/views/js/combo-veiculos.js"></script>
    <style type="text/css">
      .resultados-busca .row-fluid{
            padding: 10px 0;
            border-bottom: 1px solid #d1d1d1;
      }
      .resultados-busca .row-fluid > div{
            min-height: 160px;
            padding: 10px 0;
            border-right: 1px solid #d1d1d1;
      }
      .fotos{
            background: #000;
            width: 130px;
            height: 130px;
            padding: 5px 0;
            display: block;
            position: relative;
      }
      .fotos > div{
            width: 50%;
            height: 50%;
            position: absolute;
      }
      .fotos #foto2,
      .fotos #foto4{
            left: 50%
      }
      .fotos #foto3,
      .fotos #foto4{
            top:50%;
      }
      .resultados-busca .titulo,
      .resultados-busca .versao{
            font-size: 14px;
            color: #333;
      }
      .resultados-busca .preco{
            font-size: 20px;
      }

    </style>

  </body>
</html>

