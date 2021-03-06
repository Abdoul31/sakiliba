package org.ad.elit;


import java.util.Date;

import org.ad.elit.DAO.ClientRepository;
import org.ad.elit.DAO.CompteRepository;
import org.ad.elit.DAO.OperationRepository;
import org.ad.elit.entities.Client;
import org.ad.elit.entities.Compte;
import org.ad.elit.entities.CompteCourant;
import org.ad.elit.entities.CompteEpargne;
import org.ad.elit.entities.Retrait;
import org.ad.elit.entities.Versement;
import org.ad.elit.metier.IBankService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.CommandLineRunner;
import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.EnableAutoConfiguration;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.context.annotation.Configuration;
import org.springframework.web.bind.annotation.RestController;
@RestController
@Configuration
@EnableAutoConfiguration
@SpringBootApplication
public class YourHouseBankApplication implements CommandLineRunner {
		@Autowired	
		private ClientRepository clientRepository;
		@Autowired
		private CompteRepository compteRepository;
		@Autowired
		private OperationRepository operationRepository;
		@Autowired
		private IBankService bankServiceImpl;
		
	public static void main(String[] args) {
		SpringApplication.run(YourHouseBankApplication.class, args);
	}
	@Override
	public void run(String... args) throws Exception {
				Client c1 = clientRepository.save(
						new Client("Tonton", "Ady", "Rue Frank", "06384534", "ady@gmail.com"));
				Client c2 = clientRepository.save(
						new Client("Mumia", "Abu", "12 rue victor", "07566454", "mumia@gmail.com"));
				Client c3 = clientRepository.save(
						new Client("Camara", "Abdoulaye", "4 rue carrefour", "07696543", "camara@gmail.com"));
				//
				Compte cp1 = compteRepository.save(new CompteCourant(
						"c1", new Date(), 3300.0, c1, 200.0));
				
				Compte cp2 = compteRepository.save(
						new CompteEpargne("c2", new Date(), 4000.0, c2, 2.3));
						operationRepository.save(new Versement(new Date(), 4000.0, cp1));
						operationRepository.save(new Versement(new Date(), 5000.0, cp1));
						operationRepository.save(new Retrait(new Date(), 4000.0, cp1));
						
						operationRepository.save(new Versement(new Date(), 4000.0, cp2));
						operationRepository.save(new Versement(new Date(), 5000.0, cp2));
						operationRepository.save(new Retrait(new Date(), 4000.0, cp2));
						
						bankServiceImpl.verser(c1, 2222.0);
						
						
						
			
}
		
}