# MPS Search Engine
By Dimitrios Roditis - Data Engineer

MPS Search engine is an integration of MySQL Database, PHP scripts and Apache Solr open-source search tool, running on Apache2 Web Server. This Search Engine uses PHP library to connect to Solr Server, to index data from database and to return search results.

Our application contains an insertion mechanism to populate MySQL Database with products from factsheets. In this way, the semi-cunstructed data are transformed into structured data. At the next stage, records are transferred from database to Solr. This tool indexes data with the array of documents technique. At the same time succeeds Simple Error Checking and effective replacing content of entire Solr Index. Finally, search page builds the Solr Query Syntax using filters and the results page executes the query and displays the results it receives from Solr.

MPS Engine allows non-expert users to run queries close to human intuition using techniques and combining filters. Essentially MPS is a special purpose search engine that understands technical vocabularies such as water management terminology. In addition, satisfies information needs associated with water technologies for household sewage and recycling.
