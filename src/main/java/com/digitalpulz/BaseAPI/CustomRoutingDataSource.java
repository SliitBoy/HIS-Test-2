package com.digitalpulz.BaseAPI;

import org.springframework.jdbc.datasource.lookup.AbstractRoutingDataSource;
import org.springframework.web.context.request.RequestContextHolder;
import org.springframework.web.context.request.ServletRequestAttributes;

public class CustomRoutingDataSource extends AbstractRoutingDataSource {
	@Override
	protected Object determineCurrentLookupKey() {
		ServletRequestAttributes attr = (ServletRequestAttributes) RequestContextHolder.getRequestAttributes();// get request object
		if (attr != null) {
			String tenantId = attr.getRequest().getHeader("X-tenantID");// find parameter from request
			return tenantId;
		} else {
			return "D0001";// default data source
		}
	}
}
