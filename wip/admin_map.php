<?php
require_once(__DIR__ . '/dbconfig.php');
require_once(__DIR__ . '/includes/upper.php');



?>
<div id="admin_mapid"></div>
<div id="admin_panel">
    <h2>Admin-Einstellungen</h2>
    <form id="form-aktuelleposition" action="./func/aktuelleposition.php" method="post">
        <div>LAT:</div>
        <input id="input_neu_lat" placeholder="keine Koordinaten gewählt." name="fin-lat" readonly>

        <br/><br/>

        <div>LNG:</div>
        <input id="input_neu_lng" placeholder="keine Koordinaten gewählt." name="fin-lng" readonly>

        <br/><br/>

        <button style="width: 80%" id="submit_position" class="btn btn-success" type="submit"
                disabled="disabled">aktuelle Position setzen
        </button>
    </form>
    <button style="width: 80%" type="button" id="button_neuerpoi" class="btn btn-primary" data-toggle="modal"
            data-target=".bs-example-modal-lg" disabled="disabled">
        neuen POI setzen
    </button>


    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form id="form-neuerpoi" action="./func/neuerpoi.php" method="post">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title">Neuen POI hinzufügen</h4>
                    </div>
                    <div class="modul-body" style="margin: 5vh">
                        <div class="control-label">Koordinaten: </div>
                        <input class="form-control" id="modal_neu_lat" placeholder="keine Koordinaten gewählt." name="poi-lat" readonly>
                        <input class="form-control" id="modal_neu_lng" placeholder="keine Koordinaten gewählt." name="poi-lng" readonly>

                        <br />

                        <div class="control-label">Name: </div>

                        <input class="form-control" id="modal_neu_lng" placeholder="Sanctuary Hills" name="poi-name">

                        <br />
                            <label>
                                <input type="checkbox" class="flat" name="poi-gesperrt[]" value="poi-gesperrt-val"> POI auf der Karte freischalten?
                            </label>

                        <br />


                        <div class="control-label">Font-Awesome Icon (optional)</div>
                        <input class="form-control" id="modal_neu_fa" name="poi-fa" placeholder="fa-train">

                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Speichern</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>



<!-- Map.js -->
<script src="js/admin_truepadmap.js"></script>

<?php
require_once (__DIR__.'/includes/aktuellepos.php');
require_once(__DIR__ . '/includes/lower.php');
?>

