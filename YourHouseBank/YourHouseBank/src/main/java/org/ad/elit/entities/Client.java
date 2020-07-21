package org.ad.elit.entities;

import java.io.Serializable;
import java.util.Collection;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.OneToMany;

//
@Entity
public class Client implements Serializable {
	@Id @GeneratedValue(strategy=GenerationType.IDENTITY)
	private Long code;
	private String nom;
	private String preonm;
	private String adresse;
	private String telephone;
	private String mail;
	@OneToMany(mappedBy="client")
	private Collection<Compte> compte;
	public Client() {
		super();
		
	}
	public Long getCode() {
		return code;
	}
	public void setCode(Long code) {
		this.code = code;
	}
	public String getNom() {
		return nom;
	}
	public void setNom(String nom) {
		this.nom = nom;
	}
	public String getPreonm() {
		return preonm;
	}
	public void setPreonm(String preonm) {
		this.preonm = preonm;
	}
	public String getAdresse() {
		return adresse;
	}
	public void setAdresse(String adresse) {
		this.adresse = adresse;
	}
	public String getTelephone() {
		return telephone;
	}
	public void setTelephone(String telephone) {
		this.telephone = telephone;
	}
	public String getMail() {
		return mail;
	}
	public void setMail(String mail) {
		this.mail = mail;
	}
	public Client(String nom, String preonm, String adresse, String telephone, String mail) {
		super();
		this.nom = nom;
		this.preonm = preonm;
		this.adresse = adresse;
		this.telephone = telephone;
		this.mail = mail;
		
	}
	
	
		
}
