package org.ad.elit.entities;





import java.util.Date;

import javax.persistence.DiscriminatorValue;
import javax.persistence.Entity;

	@Entity
	@DiscriminatorValue("CE")
public class CompteEpargne extends Compte {
		private Double taux;

		public Double getTaux() {
			return taux;
		}

		public void setTaux(Double taux) {
			this.taux = taux;
		}
		public CompteEpargne() {
			super();
		}

		public CompteEpargne(String numeroCompte, Date dateCreation,
				Double solde, Client client, Double taux) {
			super(numeroCompte, dateCreation, solde, client);
				this.taux = taux;
		}
		
}
