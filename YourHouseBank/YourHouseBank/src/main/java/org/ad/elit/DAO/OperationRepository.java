package org.ad.elit.DAO;

import org.ad.elit.entities.Operation;
//import org.springframework.data.domain.Page;
//import org.springframework.data.domain.Pageable;
import org.springframework.data.jpa.repository.JpaRepository;
//import org.springframework.data.jpa.repository.Query;
//import org.springframework.data.repository.query.Param;

public interface OperationRepository extends JpaRepository<Operation, Long> {
	//PAGE D'OPERATION PAGINER
	//@Query("select o from Operation o where o.compte.numeroCompte=:x order by o.operation desc")
	//public Page<Operation> listOperation(@Param("x")String numeroCompte, Pageable pageable);
}