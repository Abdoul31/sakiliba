package org.ad.elit.metier;

import java.util.Date;

import org.ad.elit.DAO.CompteRepository;
import org.ad.elit.DAO.OperationRepository;
import org.ad.elit.entities.Compte;
import org.ad.elit.entities.CompteCourant;
import org.ad.elit.entities.Operation;
import org.ad.elit.entities.Retrait;
import org.ad.elit.entities.Versement;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.data.domain.Page;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

@Service
@Transactional
public class BankServiceImpl implements IBankService {
	@Autowired
		private CompteRepository compteRepository;
	@Autowired
		private OperationRepository operationRepository;

	@Override
	public Compte consulteCompte(String numeroCompte) {
		Compte cp = compteRepository.getOne(numeroCompte);
		
			
		return cp;
	}

	@Override
	public void verser(String numeroCompte, double montant) {
		Compte cp = consulteCompte(numeroCompte);
		Versement v = new Versement(new Date(), montant, cp);
		operationRepository.save(v);
		//MIS AJOUR SOLDE
		cp.setSolde(cp.getSolde()+montant);
		compteRepository.save(cp);
	}

	@Override
	public void retirer(String numeroCompte, double montant) {
		
		Compte cp = consulteCompte(numeroCompte);
		double faciliterCaisse = 0;
		if(cp instanceof CompteCourant)
			faciliterCaisse =((CompteCourant) cp).getDecouvert();
			
		Retrait r = new Retrait(new Date(), montant, cp);
		cp.setSolde(cp.getSolde()-montant);
		compteRepository.save(cp);
	}

	@Override
	public void virement(String numeroCompte1, String numeroCompte2, double montant) {
		retirer(numeroCompte1, montant);
		verser(numeroCompte2, montant);
		
	}

	@Override
	public Page<Operation> listOperation(String numeroCompte, int page, int size) {
		// TODO Auto-generated method stub
		return null;
	}

}
