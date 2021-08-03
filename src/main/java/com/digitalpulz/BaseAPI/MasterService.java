package com.digitalpulz.BaseAPI;

import java.io.File;
import java.io.FileInputStream;
import java.util.HashMap;
import java.util.Map;
import java.util.Properties;

import org.apache.commons.lang3.SystemUtils;
import org.springframework.jdbc.datasource.DriverManagerDataSource;

public class MasterService {
	public static Map<Object, Object> getDataSourceHashMap() {
		File folder = null;
		if (SystemUtils.IS_OS_LINUX) {
			folder = new File("/home/ubuntu/configFiles"); // TODO: Replace 'ubuntu' with respective user-name of the deploying system
		}
		if (SystemUtils.IS_OS_WINDOWS) {
			folder = new File("C://configFiles");
		}
		File[] fileNames = (folder == null) ? new File[0] : folder.listFiles();
		HashMap hashMap = new HashMap();
		for (File file : fileNames) {
			try {
				Properties tenantProperties = new Properties();
				tenantProperties.load(new FileInputStream(file));

				DriverManagerDataSource dataSource = new DriverManagerDataSource();
				dataSource.setUrl(tenantProperties.getProperty("url"));
				dataSource.setUsername(tenantProperties.getProperty("username"));
				dataSource.setPassword(tenantProperties.getProperty("password"));

				hashMap.put(tenantProperties.getProperty("id"), dataSource);

			} catch (Exception e) {
				e.printStackTrace();
			}
		}
		return hashMap;
	}
}
