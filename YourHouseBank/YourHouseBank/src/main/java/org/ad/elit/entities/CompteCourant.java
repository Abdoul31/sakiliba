package org.ad.elit.entities;

import java.util.Date;

import javax.persistence.DiscriminatorValue;
import javax.persistence.Entity;
@Entity
@DiscriminatorValue("CC")
public class CompteCourant extends Compte {
	
		private Double decouvert;
		
		public CompteCourant() {
			super();
		}

		public CompteCourant(String numeroCompte,Date dateCreation, 
				Double solde, Client client, Double decouvert) {
			super(numeroCompte, dateCreation, solde, client);
				this.decouvert = decouvert;
		}

		public Double getDecouvert() {
			return decouvert;
		}

		public void setDecouvert(Double decouvert) {
			this.decouvert = decouvert;
		}
		
}
