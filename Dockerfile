FROM adoptopenjdk/openjdk8-openj9:jdk8u252-b09_openj9-0.20.0-alpine
RUN adduser -D ubuntu
RUN mkdir /home/ubuntu/configFiles
RUN mkdir /opt/shareclasses
RUN mkdir /opt/app
VOLUME /tmp
ADD /target/base-api-1.0.0.jar app.jar
ENTRYPOINT ["java","-Xshareclasses","-Xquickstart","-jar","/app.jar"]