package com.digitalpulz.BaseAPI.Repository;

import java.util.List;
import java.util.Optional;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;

import com.digitalpulz.BaseAPI.Entity.ExaminationTest;

public interface ExaminationTestRepository extends JpaRepository<ExaminationTest, Long>{

	@Query("FROM ExaminationTest ex  where ex.active=true")
	Optional<List<ExaminationTest>> getAllActiveTest();
}
