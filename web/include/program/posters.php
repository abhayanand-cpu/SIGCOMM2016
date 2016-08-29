  <div id="posters-program" class="posters-program">
    <ul class="program" data-role="listview" data-filter="true" data-inset="true" data-theme="d" data-dividertheme="a" placeholder="Filter program...">
<?php
      tprog_add_header("Tuesday, August 23, 2016", "prog-tuesday");
      tprog_add_session("10:30am - 5:30pm", "Session 1 - Poster presenters onsite during coffee breaks", "", "Topazio", "a", "prog-tuesday");
      tprog_add_paper("paper-3", "PieBridge: A Cross-DR scale Large Data Transmission Scheduling System", "Y. Zhang&nbsp;(Tsinghua University), K. Xu&nbsp;(Tsinghua University), G. Yao&nbsp;(Baidu), M. Zhang&nbsp;(Baidu), X. Nie&nbsp;(Tsinghua University)", "Cross-DR WAN (Datacenter Region Wide Area Network) with various services are deployed to provide timely data information and analytics for users in a wide range of geographical locations. For its reliability and performance, data duplication synchronization is essential among different IDCs (Internet datacenters). However, this problem poses a challenge. First, data duplication requires huge amount of bandwidth whereas the bandwidth of cross-DR links and the upload/download rates of server interfaces are limited. Second, data transmissions are time sensitive, but the current network cannot complete such tasks in a timely manner. In this work, we present PieBridge, a cross-RD data duplicate transmission platform that accommodates hundreds of TBs of data generated from user applications online data analytics. We deployed PieBridge on the IDCs of Baidu and obtained promising performance results in comparison with the prevalent approaches.", "http://dl.acm.org/authorize?N19299", "", "", "prog-tuesday");
      tprog_add_paper("paper-4", "A Longitudinal Analysis of .i2p Leakage in the Public DNS Infrastructure", "S. Jeong (Korea University), A. Kang (SUNY Buffalo), J. Kim (Chung-Ang University), H. Kim (Korea University), A. Mohaisen (SUNY Buffalo)", "The Invisible Internet Project (I2P) is an overlay network that provides secure and anonymous communication channels. EepSites are the anonymous websites hosted in the I2P network. To access the eepSites, DNS requests of a domain name suffixed with the {\sf .i2p} pseudo top-level domain (TLD) are routed within the I2P network. However, not only that {\sf .i2p} queries are leaking in the public DNS infrastructure, but also such leakage has various plausible root causes and implications that are different from other related leakage. In this paper, we analyze the leaked {\sf .i2p} requests captured in the A and J root name servers of the public DNS, showing that a large number of queries are observed and outlining various potential directions of addressing such leakage.", "http://dl.acm.org/authorize?N19291", "", "", "prog-tuesday");
      tprog_add_paper("paper-5", "Best Effort Task Scheduling for Data Parallel Jobs", "Z. Li (National University of Defense Technology), Y. Zhang (National University of Defense Technology), Y. Zhao (National University of Defense Technology), Y. Peng (National University of Defense Technology), D. Li (National University of Defense Technology)", "The tasks of data-parallel computation jobs come up with diverse and time-varying resource requirements. The dynamic nature of task requirements brings challenges on making good scheduling decisions, due to it is hard to keep work-conserving. In this paper, we present BETS to cope with the requirement dynamics that aims at utilizing cluster resources fully. BETS employs a task model that represents for runtime task requirements, a coarse-grained task pipeline to make use of resources in a time-division multiplexing fashion, and fine-grained resource management to guarantee performance.", "http://dl.acm.org/authorize?N19290", "", "", "prog-tuesday");
      tprog_add_paper("paper-6", "Efficient Remapping of Internet Routing Events", "E. Fazzion (Universidade Federal de Minas Gerais), &Iacute;. Cunha (Universidade Federal de Minas Gerais), D. Guedes (Universidade Federal de Minas Gerais), W. Meira Jr. (Universidade Federal de Minas Gerais), R. Teixeira (Inria), D. Veitch (University of Technology Sydney), C. Diot (Safran)", "Routing events impact multiple paths in the Internet, but current active topology mapping techniques monitor paths independently. Detecting a routing event on one Internet path does not trigger any measurements on other possibly-impacted paths. This approach leads to outdated and inconsistent routing information. We characterize routing events in the Internet and investigate probing strategies to efficiently identify paths impacted by a routing event. Our results indicate that targeted probing can help us quickly remap routing events and maintain more up-to-date and consistent topology maps.", "http://dl.acm.org/authorize?N19205", "", "", "prog-tuesday");
      tprog_add_paper("paper-7", "Privacy-Aware Infrastructure for Managing Personal Data", "Y. Amar (Queen Mary University of London), H. Haddadi (Queen Mary University of London), R. Mortier (University of Cambridge)", "In recent times, we have seen a proliferation of personal data. This can be attributed not just to a larger proportion of our lives moving online, but also through the rise of ubiquitous sensing through mobile and IoT devices. Alongside this surge, concerns over privacy, trust, and security are expressed more and more as different parties attempt to take advantage of this rich assortment of data.

The Databox seeks to enable all the advantages of personal data analytics while at the same time enforcing **accountability** and **control** in order to protect a user's privacy. In this work, we propose and delineate a personal networked device that allows users to **collate**, **curate**, and **mediate** their personal data.", "http://dl.acm.org/authorize?N19208", "", "", "prog-tuesday");
      tprog_add_paper("paper-8", "Performance Evaluation of Locator/Identifier Separation Protocol through RIPE Atlas", "Y. Li (Telecom ParisTech), L. Iannone (Telecom ParisTech)", "The \emph{Locator/Identifier Separation Protocol} (LISP) introduces several benefits to the Internet architecture, yet, since it is just in the initial deployment stage, comprehensive understanding of its integration performance with legacy Internet becomes essential. We leverage on RIPE Atlas, the largest Internet measurement infrastructure, to conduct large scale measurements analysis to provide the feedback to improve LISP technology. The preliminary evaluations show that LISP generally has a reliable performance, compared with the existing Internet. From our vantage point, we observe that LISP introduces a non-negligible latency for the European and North American destinations, occasionally some extremely large delay, however, it shows a faster connection for the Asian intercontinental transmission.", "http://dl.acm.org/authorize?N19293", "", "", "prog-tuesday");
      tprog_add_paper("paper-9", "TafLoc: Time-adaptive and Fine-grained Device-free Localization with Little Cost", "L. Chang (Northwest University), J. Xiong (Singapore Management University), X. Chen (Northwest University), J. Wang (Northwest University), J. Hu (Northwest University), D. Fang (Northwest University), W. Wang (Northwest University), L. Chang (Northwest University)", "Many emerging applications drive the needs of device-free localization (DfL), in which the target can be localized without any device attached. Because of the ubiquitousness of WiFi infrastructures nowadays, the widely available Received Signal Strength (RSS) information at the WiFi Access points are commonly employed for localization purposes. However, current RSS based DfL systems have one main drawback hindering their real-life applications. That is, the RSS measurements (fingerprints) vary slowly in time even without any change in the environment and frequent updates of RSS at each location lead to a high human labor cost. In this paper, we propose an RSS based low cost DfL system named TafLoc which is able to accurately localize the target over a long time scale. To reduce the amount of human labor cost in updating the RSS fingerprints, TafLoc represents the RSS fingerprints as a matrix which has several unique properties. Based on these properties, we propose a novel fingerprint matrix reconstruction scheme to update the whole fingerprint database with just a few RSS measurements, thus the labor cost is greatly reduced. Extensive experiments illustrate the effectiveness of TafLoc, outperforming the state-of-the-art RSS based DfL systems.", "http://dl.acm.org/authorize?N19294", "", "", "prog-tuesday");
      tprog_add_paper("paper-10", "A First Look into Transnational Routing Detours", "A. Edmundson (Princeton University), R. Ensafi (Princeton University), N. Feamster (Princeton University), J. Rexford (Princeton University)", "An increasing number of countries are passing laws that facilitate the mass surveillance of their citizens. In response, governments and citizens are increasingly paying attention to the countries that their Internet traffic traverses. In some cases, countries are taking extreme steps, such as building new IXPs and encouraging local interconnection to keep local traffic local. We find that although many of these efforts are extensive, they are often futile, due to the inherent lack of hosting and route diversity for many popular sites. We investigate how the use of overlay network relays and the DNS open resolver infrastructure can prevent traffic from traversing certain jurisdictions.", "http://dl.acm.org/authorize?N19206", "", "", "prog-tuesday");
      tprog_add_paper("paper-11", "PathCache: A Path Prediction Toolkit", "R. Singh (Stony Brook University), P. Gill (Stony Brook University)", "Path prediction on the Internet has been a topic of research in the networking community for close to a decade. Applications of path prediction solutions have ranged from optimizing selection of peers in peer- to-peer networks to improving and debugging CDN predictions. Recently, revelations of traffic correlation and surveillance on the Internet have raised the topic of path prediction in the context of network security. Specifically, predicting network paths can allow us to identify and avoid given organizations on network paths (e.g., to avoid traffic correlation attacks in Tor) or to infer the impact of hijacks and interceptions when direct measurements are not available.

In this poster we propose the design and implementation of PathCache which aims to reuse measurement data to estimate AS level paths on the Internet. Unlike similar systems, PathCache does not assume that routing on the Internet is destination based. Instead, we develop an algorithm to compute confidence in paths between ASes. These multiple paths ranked by their confidence values are returned to the user.", "http://dl.acm.org/authorize?N19207", "", "", "prog-tuesday");
      tprog_add_paper("paper-12", "Application-specific Acceleration Framework for Mobile Applications", "B. Choi (KAIST), J. Kim (KAIST), D. Han (KAIST)", "Minimizing response times for mobile applications is critical for quality user experience that often impacts the revenue of mobile services. Generalized approaches to accelerated mobile applications (e.g., TCP acceleration, SPDY, compression) are less effective because they do not take account for application specific behaviors. In contrast, application specific approaches build application-specific proxies by leveraging the app-specific protocol behaviors to enable dynamic caching and/or prefetching. However, this is non-trivial because it requires manual analysis of application level protocols and their interactions. Therefore, only a small number of apps enjoyed the benefit.

This paper addresses the problem of scaling the number of applications by automating the process. To this end, we present a framework for mobile application acceleration that leverages automatic protocol analysis to automatically discover opportunities for app acceleration. The framework automatically finds out when and where to prefetch or perform dynamic caching. We present the framework design and a preliminary result that demonstrates its viability.", "http://dl.acm.org/authorize?N19292", "", "", "prog-tuesday");
      tprog_add_header("Wednesday, August 24, 2016", "prog-wednesday");
      tprog_add_session("9:00am - 5:30pm", "Session 2 - Poster presenters onsite during coffee breaks", "", "Topazio", "a", "prog-wednesday");
      tprog_add_paper("paper-15", "Named Data Networking Based Smart Home Lighting", "U. De Silva (Asian Institute of Technology), A. Lertsinsrubtavee (University of Cambridge), A. Sathiaseelan (University of Cambridge), K. Kanchanasut (Asian Institute of Technology)", "In this paper, we provide an initial evaluation of a home smart lighting system - demonstrating the advantages of ICN paradigm through the primitive features of NDN architecture. A prototype of NDN based smart home lighting was developed and benchmarked against the IP cloud based approach.", "http://dl.acm.org/authorize?N19209", "", "", "prog-wednesday");
      tprog_add_paper("paper-16", "Achieving Consistent SDN Control With Declarative Applications", "W. Wang (McGill Unversity), C. Liu (Logistic Information Center), J. Su (National University Of Defense Technology), W. He (McGill Unversity)", "Software-defined networking enables applications act as blackboxes independently to control the network flexibly. However, these independent applications may generate conflicting control decisions. To reconcile applications automatically and dynamically, we implement control applications with Prolog, which enables applications to execute jointly to make consistent control decisions. When conflicts occur, we design a compromise algorithm by sacrificing a subset of applications to maximize the desired control objectives.", "http://dl.acm.org/authorize?N19215", "", "", "prog-wednesday");
      tprog_add_paper("paper-17", "Modular SDN Compiler Design with Intermediate Representation", "H. Li (Xi'an Jiaotong University), C. Hu (Xi'an Jiaotong University), P. Zhang (Xi'an Jiaotong University), L. Xie (Xi'an Jiaotong University)", "Software Defined Networking (SDN) is evolving to such a phase that multiple programming languages and rule specifications coexist. However, current SDN compilers are closely bound to both languages and rules, thus disable the interoperability and compatibility of SDN programs. To solve this problem, we propose to modularize the SDN compiler by leveraging intermediate representation (IR), a common technique for computer compiler design. Specifically, we introduce Semantic Rule (SR) as the first IR for SDN compilers, which is a simple, language-independent, and semantic-preserving representation. We develop two optimizations on the semantic rule to coordinate cross-language programs in a single network and compress the number of compiled rules. We implement a modular compiler prototype with the proposed SR, and demonstrate that RYU programs can run at both OpenFlow and POF network. With synthetic network configurations, we demonstrate that the optimizations on SRs are effective, efficient and scalable.", "http://dl.acm.org/authorize?N19216", "", "", "prog-wednesday");
      tprog_add_paper("paper-18", "SLA-NFV: an SLA-aware High Performance Framework for Network Function Virtualization", "C. Sun (Tsinghua University), J. Bi (Tsinghua University), Z. Zheng (Tsinghua University), H. Hu (Clemson University)", "We propose SLA-NFV, a Service Level Agreement (SLA) aware framework, for building high-performance NFV, focusing on fulfilling SLAs of service subscribers (or tenants). SLA-NFV leverages a hybrid infrastructure with both software and programmable hardware to enhance NFV&rsquo;s capability with respect to various SLAs. Evaluations show that a hybrid service chain could reduce latency by up to 60% compared with a pure soft- ware service chain.", "http://dl.acm.org/authorize?N19203", "", "", "prog-wednesday");
      tprog_add_paper("paper-19", "Conan: Content-aware Access Network Flow Scheduling to Improve QoE of Home Users", "H. Yang (Nanjing University), X. Wang (Nanjing University), C. Nguyen (Nanjing University), S. Lu (Nanjing University)", "There has always been a gap of perception between Internet Service Providers (ISPs) and their customers when considering the performance of network service. On one hand, ISPs invest to increase downstream speed of access network infrastructure. On the other hand, users cannot achieve perceived quality of experience (QoE). This paper addresses this problem by introducing a system, Conan, which enables content-aware flow scheduling to improve the QoE of users. Conan exploits to satisfy users' requirements in the access network (LAN), which is the performance bottleneck actually. By leveraging the technique of software defined networking (SDN), Conan are able to specify the expected network capacity for different applications. Automatic application identification is deployed at home gateway to improve the scalability, and flexible bandwidth allocation is realized at LAN for specified applications. Using video streaming service optimization as an example, we demonstrate that our system can automatically allocate bandwidth for video flows.", "http://dl.acm.org/authorize?N19200", "", "", "prog-wednesday");
      tprog_add_paper("paper-20", "Building Application-Aware Network Environments using SDN for Optimizing Hadoop Applications", "S. Zhao (University of Missouri - Kansas City), A. Sydney (Raytheon BBN Technologies), D. Medhi (University of Missouri - Kansas City), S. Zhao (University of Missouri - Kansas City)", "Hadoop has become the de facto standard for Big Data analytics, especially for workloads that use the MapReduce (M/R) framework. However, the lack of network awareness of the default MapReduce resource manager in Hadoop can cause unbalanced job scheduling, network bottleneck, and eventually increase the Hadoop run time if Hadoop nodes are clustered in several geographically distributed locations. In this paper, we present an application-aware network approach using software-defined networking (SDN) for distributed Hadoop clusters. We develop the SDN applications for this environment that consider network topology discovery, traffic monitoring, and flow rerouting in addition to loop avoidance mechanisms.", "http://dl.acm.org/authorize?N19204", "", "", "prog-wednesday");
      tprog_add_paper("paper-21", "Horse: towards an SDN traffic dynamics simulator for large scale networks", "E. Fernandes (Queen Mary, University of London), G. Antichi (University of Cambridge), I. Castro (Queen Mary, University of London), S. Uhlig (Queen Mary, University of London)", "The Software Defined Networking (SDN) paradigm can be successfully applied to the inter-domain ecosystem to empower network fabrics with finer grained policies and traffic engineering capabilities. However, introducing SDN at the inter-domain level might also lead to misconfigurations with potential to negatively impact on the Internet. Simulators are a popular approach to verify network behaviour and test applications before going into production. In the case of SDN, the available options do not scale for large scale networks nor high traffic loads. In this paper we propose a new simulator to foster SDN research and improve our understanding on the impact of the new use cases over the traffic flow. A simulation tool capable of efficiently reproducing large scale networks, high traffic loads, and policies, by abstracting the interactions between switches and controllers of the SDN network.", "http://dl.acm.org/authorize?N19201", "", "", "prog-wednesday");
      tprog_add_paper("paper-22", "Rethinking the Design of OpenFlow Switch Counters", "J. Yang (Xian Jiaotong Unviersity), C. Hu (Xian Jiaotong Unviersity), P. Zheng (Xian Jiaotong Unviersity), R. Wang (Xian Jiaotong Unviersity), P. Zhang (Xian Jiaotong Unviersity), X. Guan (Xian Jiaotong University / Tsinghua University)", "OpenFlow, as the Software Defined Networking (SDN) primitive, provides a simple forwarding plane abstraction, which heavily relies on the fast memory inside the OpenFlow Switch (OFS). OFS components, e.g. flow table, meter table, counters, have to compete for the limited fast memory resource. As a result, only a few counting functions are defined as mandatory in the OFS specification, although a lot of SDN proposals depend on a detailed states collected by the optional counters in the specification. This fact motivates us to rethink the way to maintain counters in the OFS. We propose a new architecture called CACTI, which only consumes several registers in the fast path and moves the completed counters into the on chip RAM like cache in the slow path processor. Theoretical analysis and experiments on the prototype system demonstrated the efficiency of our architecture: CACTI is capable to achieve the throughput of 29.4-39.7M pps packets per second (pps). No RAM resource is needed any more in the fast path, instead, CACTI consumes only 0.24-0.54\% Look-Up Table and 0.35-0.43\% flip-flops compared with the entire FPGA-based OFS design in the fast path, and the unused CPU cache in the slow path.", "http://dl.acm.org/authorize?N19217", "", "", "prog-wednesday");
      tprog_add_paper("paper-23", "Taming the Flow Table Overflow in OpenFlow Switch", "S. Qiao (Xi&rsquo;an Jiaotong University), C. Hu (Xi&rsquo;an Jiaotong University), X. Guan (Xi&rsquo;an Jiaotong University), J. Zou (Xi&rsquo;an Jiaotong University)", "SDN has become the wide area network technology, which the academic and industry most concerned about.The limited table sizes of today&rsquo;s SDN switches has turned to the most prominent short planks in the network design implementation. TCAM based flow table can provide an excellent matching performance while it really costs much. Even the flow table overflow cannot be prevented by a fixed-capacity flow table. In this paper, we design FTS(Flow Table Sharing) mechanism that can improve the performance disaster caused by overflow. We demonstrate that FTS reduces both control messages quantity and RTT time by two orders of magnitude compared to current state-of-the-art OpenFlow table-miss handler.", "http://dl.acm.org/authorize?N19218", "", "", "prog-wednesday");
      tprog_add_paper("paper-24", "Magellan: Generating Multi-Table Datapath from Datapath Oblivious Algorithmic SDN Policies", "A. Voellmy (Yale University), S. Chen (Tongji University), X. Wang (Tongji University), Y. Yang (Yale University)", "Despite the emergence of multi-table pipelining as a key feature of next-generation SDN data-path models, there is no existing work that addresses the substantial programming challenge of utilizing multi-tables automatically. In this paper, we present Magellan, the first system that addresses the aforementioned challenge. Introducing two novel, substantial algorithms, map-explore and table-design, Magellan achieves automatic derivation and population of multi-table pipelines from a datapath-oblivious, high-level SDN program written in a general-purpose language. Comparing the flow tables generated by Magellan with those produced by standard SDN controllers including OpenDaylight and Floodlight, we show that Magellan uses between 46-68x fewer rules.", "http://dl.acm.org/authorize?N19219", "", "", "prog-wednesday");
      tprog_add_paper("paper-25", "FAST: A Simple Programming Abstraction for Complex State-Dependent SDN Programming", "K. Gao (Tsinghua University), C. Gu (Tongji University), Q. Xiang (Tongji/Yale University), Y. Yang (Tongji/Yale University), J. Bi (Tsinghua University), Q. Xiang (Yale University)", "Handling state dependencies is a major challenge in modern SDN programming, but existing frameworks do not provide sufficient abstractions nor tools to address this challenge. In this paper, we propose a novel, high-level programming abstraction and implement the *Function Automation SysTem (FAST)*. With the two key features, i.e., *automated state dependency tracking* and *efficient re-execution scheduling*, we demonstrate that FAST substantially simplifies state-dependent SDN programming and boosts the performance.", "http://dl.acm.org/authorize?N19202", "", "", "prog-wednesday");
?>
    </ul>
  </div>
