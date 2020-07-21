package org.ad.elit.metier;

import org.ad.elit.entities.Compte;
import org.ad.elit.entities.Operation;
import org.springframework.data.domain.Page;

public interface IBankService {
		public Compte consulteCompte (String numeroCompte);
		public void verser(String numeroCompte, double montant);
		public void retirer(String numeroCompte, double montant);
		public void virement(String numeroCompte1, String numeroCompte2, double montant);
		public Page<Operation>listOperation(String numeroCompte, int page, int size);

}
