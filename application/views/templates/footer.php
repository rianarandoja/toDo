    <footer class="page-footer" id="upper-footer">
        <div class="container">
            <div class="row center_objects">

                <!--column 1-->
                <div class="col s4">
                    <ul>
                        <li><a href="<?php echo site_url('Tasks/index') ?>"><?php echo lang('tasks') ?></a></li>
                        <li><a href="<?php echo site_url('Settings/index') ?>"><?php echo lang('settings') ?></a></li>
                        <li><a href="<?php echo site_url('Pets/index') ?>"><?php echo lang('pets') ?></a></li>
                    </ul>
                </div>

                <!--column 2-->
                <div class="col s4">
                    <ul>
                        <li><a href="<?php echo site_url('About/index') ?>"><?php echo lang('about') ?></a></li>
                        <li><a href="<?php echo site_url('Sitemap/index') ?>"><?php echo lang('sitemap') ?></a></li>
                    </ul>
                </div>

                <!--column 3-->
                <div class="col s4">
                    <div class="row">
                                <?php
                                $link = base_url("/asset/img/ee.svg");
                                $link2 = base_url("/asset/img/gb.svg");
                                $link3 = site_url('LanguageSwitcher/switchLang/english');
                                $link4 = site_url('LanguageSwitcher/switchLang/estonian');
                                $uri = "?uri=".urlencode($_SERVER['REQUEST_URI']);


                                if ($this->session->userdata('site_lang') == "estonian"){
                                    echo "<a href='$link3'>";
                                    echo "<img src='$link2' id='est' alt='Change to English'/>";
                                    echo "</a>";
                                    }
                                else {
                                    echo "<a href='$link4'>";
                                    echo "<img src='$link' id='eng' alt='Muuda eestikeelseks' />";
                                    echo "</a>";
                                }?>
                    </div>
                </div>
                </div>

            </div>

        <div class="footer-copyright">
            <div class="container">
                © 2017 Rajasalu, Raju, Randoja
            </div>
        </div>
    </footer>

    </body>
</html>