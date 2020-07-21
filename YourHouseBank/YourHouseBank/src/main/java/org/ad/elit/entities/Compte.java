package org.ad.elit.entities;

import java.io.Serializable;
import java.util.Collection;
import java.util.Date;

import javax.persistence.DiscriminatorColumn;
import javax.persistence.DiscriminatorType;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.Inheritance;
import javax.persistence.InheritanceType;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.OneToMany;
	@Entity
	@Inheritance(strategy=InheritanceType.SINGLE_TABLE)
	@DiscriminatorColumn(name="TYPE_CPTE",discriminatorType=DiscriminatorType.STRING,length=2)
public abstract class Compte implements Serializable {
		@Id 
		private String numeroCompte;
		private Date dateCreation;
		private Double solde;
		//CLEF ETRANGERE/ASSOC BIDIRECTIONNELLE
		@ManyToOne
		@JoinColumn(name="CODE_CLIENT")
		private Client client;
		@OneToMany(mappedBy="compte")
		private Collection<Operation>operations;
		
			public Compte() {
				super();
			}

			public Compte(String numeroCompte,Date dateCreation, Double solde, Client client) {
				super();
				this.numeroCompte=numeroCompte;
				this.dateCreation=dateCreation;
				this.solde=solde;
				this.client=client;
			}

			public String getNumeroCompte() {
				return numeroCompte;
			}

			public void setNumero(String numeroCompte) {
				this.numeroCompte = numeroCompte;
			}

			public Date getDateCreation() {
				return dateCreation;
			}

			public void setDateCreation(Date dateCreation) {
				this.dateCreation = dateCreation;
			}

			public Double getSolde() {
				return solde;
			}

			public void setSolde(Double solde) {
				this.solde = solde;
			}

			public Client getClient() {
				return client;
			}

			public void setClient(Client client) {
				this.client = client;
			}

			public Collection<Operation> getOperations() {
				return operations;
			}

			public void setOperations(Collection<Operation> operations) {
				this.operations = operations;
			}
			
			
}
