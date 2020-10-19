<html>
    <head>

    </head>
    <body>
        <header>

            
            <ul>
                <li><a href="<?php echo base_url(); ?>">Tabulka</a></li>
                <li><a href="<?php echo base_url(); ?>mapa">Mapa</a></li>
            </ul>
            

        </header>
        <section class="table first">
            <div class="container">
                <div class="main-block clearfix">
                    <div class="filter">
                        <?php echo form_open('filter'); ?>
                        
                        <?php if ($skola) { ?>
                            <div class="main-filter-block">
                                <h2>Podle školy</h2>
                                <div class="slide">
                                    <?php foreach ($skola as $item) { ?>
                                        <div class="block">
                                            <input id="<?php echo str_replace(" ", "", $item->nazev); ?>" type="checkbox" name="skola[]" value="<?php echo $item->id; ?>"/>
                                            <label for="<?php echo str_replace(" ", "", $item->nazev); ?>"><?php echo $item->nazev; ?></label>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } ?>
                        
                        <button type="submit">Vyfiltrovat</button>
                        <?php echo form_close(); ?>
                    </div>
                    <div class="data">
                        <table>
                            <thead>
                            <th>Název školy</th>
                            <th>Město</th>
                            <th>Počet přijatých</th>
                            <th>Obor</th>
                            </thead>
                            <tbody>
                                <?php foreach ($filter as $item) { ?>
                                    <tr>
                                        <td><?php echo $item->skola; ?></td>
                                        
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
</html>
