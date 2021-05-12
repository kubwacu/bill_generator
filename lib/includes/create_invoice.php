<div class="overlay" id="create_invoice_overlay">
    <div class="invoice_form_container">
        <div class="header">
            <span id="close_create_invoice_overlay"><i class="fas fa-times"></i></span>
        </div>
        <form action="" method="POST">
            <h1>A propos du vendeur</h1>
            <div class="form_group">
                
                <div class="input_container">
                    <label for="">Nom du vendeur</label>
                    <input type="text" placeholder="Entrer le nom du vendeur" name="seller_name" required>
                </div>
                <div class="input_container">
                    <label for="">Téléphone du vendeur</label>
                    <input type="text" placeholder="Entrer le numero du vendeur" name="seller_phone" required>
                </div>
                <div class="input_container">
                    <label for="">Date d'expiration</label>
                    <input type="date" placeholder="Entrer la date d'expiration" name="sell_expiration_date" required>
                </div>
                <div class="input_container">
                    <label for="">Condition</label>
                    <input type="text" placeholder="Entrer la condition" name="sell_condition" required>
                </div>
                <div class="input_container">
                    <label for="">Modalité</label>
                    <input type="text" placeholder="Entrer la modalité" name="sell_modality" required>
                </div>
            </div>
            <h1>A propos du client</h1>
            <div class="form_group">
                
                <div class="input_container">
                    <label for="">Nom et Prénom</label>
                    <input type="text" placeholder="Entrer le nom et prénom du client" name="client_name" required>
                </div>
                <div class="input_container">
                    <label for="">Entreprise</label>
                    <input type="text" placeholder="Entrer l'entreprise client" name="client_entreprise" required>
                </div>
                <div class="input_container">
                    <label for="">Adresse</label>
                    <input type="text" placeholder="Entrer l'adresse du client" name="client_address" required>
                </div>
                <div class="input_container">
                    <label for="">Ville/Etat</label>
                    <input type="text" placeholder="Entrer la ville et l'état du client" name="client_country" value="Bujumbura/Burundi" required>
                </div>
                <div class="input_container">
                    <label for="">Téléphone</label>
                    <input type="text" placeholder="Entrer le numero du client" name="client_phone" required>
                </div>
            </div>
            <h1>Produits ou Services</h1>
            <table>
                <tr class="table_header">
                    <th>Description</th>
                    <th>Quantité</th>
                    <th>Prix unitaire</th>
                    <th>TVA</th>
                    <th>Montant</th>
                </tr>
                <tr class="table_row">
                    <td>Payment Netflix</td>
                    <td>1</td>
                    <td>15000</td>
                    <td>1000</td>
                    <td>151000</td>
                </tr>
            </table>
            <div class="invoice_form_add_button">
                <button class="button"><i class="fas fa-plus"></i> Ajouter </button>
            </div>
            <div class="submit_button">
                <button class="button" type="submit"><i class="fas fa-plus"></i> Enregistrer la facture </button>
            </div>
        </form>
    </div>
</div>