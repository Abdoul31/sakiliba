package org.ad.elit.entities;



import java.util.Date;

import javax.persistence.DiscriminatorValue;
import javax.persistence.Entity;

	@Entity
	@DiscriminatorValue("R")
public class Retrait extends Operation {
		public Retrait() {
			super();
		}

		public Retrait(Date dateOperation, Double montant, Compte compte) {
			super(dateOperation, montant, compte);
			// TODO Auto-generated constructor stub
		}
}
