package org.ad.elit.entities;


import java.util.Date;

import javax.persistence.DiscriminatorValue;
import javax.persistence.Entity;

@Entity
@DiscriminatorValue("V")
public class Versement extends Operation {
		public Versement() {
			super();
		}

		public Versement(Date dateOperation, Double montant, Compte compte) {
			super(dateOperation, montant, compte);
			// TODO Auto-generated constructor stub
		}
}
