  <div id="demos-program" class="demos-program">
    <ul class="program" data-role="listview" data-filter="true" data-inset="true" data-theme="d" data-dividertheme="a" placeholder="Filter program...">
<?php
      tprog_add_header("Tuesday, August 23, 2016", "prog-tuesday");
      tprog_add_session("9:00am - 5:30pm", "Session 1 - Demo presenters onsite during coffee breaks", "", "", "prog-tuesday");
      tprog_add_paper("Source Address Validation in Software Defined Networks", "B. Liu (Tsinghua University & Huawei Technologies Co. Ltd.), J. Bi (Tsinghua University), Y. Zhou (Tsinghua University)", "In this paper, we present the preliminary design and implementation of SDN-SAVI, an SDN application that enables SAVI functionalities in SDN networks. In this proposal, all the functionalities are implemented on the controller without modifying SDN switches. To enforce SAVI on packets in the data plane, the controller installs binding tables in switches using existing SDN techniques, such as OpenFlow. With SDN-SAVI, a network administrator can now enforce SAVI in her network by merely integrating a module on the controller, rather than purchasing SAVI-capable switches and replacing legacy ones.", "http://dl.acm.org/ft_gateway.cfm?id=2960425", "", "", "prog-tuesday");
      tprog_add_paper("MACSAD: Multi-Architecture Compiler System for Abstract Dataplanes (aka Partnering P4 with ODP)", "P. Patra (University of Campinas), C. Rothenberg (University of Campinas), G. Pongr&aacute;cz (Ericsson Research)", "Software Defined Networking (SDN) strives for deep programmable hardware and software dataplanes without giving up on performance. Domain Specific Languages (DSL) such as P4 seek to provide top-down high-level capabilities to define the datapath pipeline agnostic to the network platform and independent from any network protocols. At the crossroads, bottom-up industry efforts at the OpenDataPlane (ODP) initiative are pursuing open-source multiarchitecture APIs for dataplane programmability across various networking platforms. Towards P4 code reuse for various targets (portability), we propose MACSAD as a compiler system that brings together the higher-level P4 language and the abstract, target-independent ODP APIs. The demo showcases two P4 applications compiled into heterogeneous datapath platforms supporting ODP.", "http://dl.acm.org/ft_gateway.cfm?id=2959077", "", "", "prog-tuesday");
      tprog_add_paper("Capture and Replay: Reproducible Network Experiments in Mininet", "A. Fr&ouml;mmgen (TU Darmstadt), D. Stohr (TU Darmstadt), J. Fornoff (TU Darmstadt), W. Effelsberg (TU Darmstadt), A. Buchmann (TU Darmstadt)", "Network emulations are widely used in the networking community. The network emulator Mininet recently gained popularity, as it allows running real Linux applications on top of an emulated network. The specification of the network includes the topology as well as static bandwidth, latency, and packet drops probability parameters. Even though evaluations with static parameters provide useful insights, real world measurements show dynamically changing bandwidths, posing special challenges that need to be addressed in network research. In this demo, we capture bandwidth traces in the wild and reproducibly replay these traces in Mininet. Our \emph{capture and replay} infrastructure consists of a Mininet extension for replaying bandwidth traces, a measurement Android app, as well as a graphical repository for bandwidth traces. We exemplary demonstrate this toolchain for reproducible DASH and Multipath TCP experiments.", "http://dl.acm.org/ft_gateway.cfm?id=2959076", "", "", "prog-tuesday");
      tprog_add_paper("Towards Transiently Secure Updates in Asynchronous SDNs", "A. Shukla (TU Berlin), S. Schmid (Aalborg University), A. Feldmann (TU Berlin), A. Ludwig (TU Berlin), S. Dudycz (University of Wroclaw), A. Schuetze (TU Berlin)", "Software-Defined Networks (SDNs) promise to overcome the often complex and error-prone operation of tradi- tional computer networks, by enabling programmabil- ity, automation and verifiability. Yet, SDNs also in- troduce new challenges, for example due to the asyn- chronous communication channel between the logically centralized control platform and the switches in the data plane. In particular, the asynchronous commu- nication of network update commands (e.g., OpenFlow FlowMod messages) may lead to transient inconsisten- cies, such as loops or bypassed waypoints (e.g., fire- walls). One approach to ensure transient consistency even in asynchronous environments is to employ smart scheduling algorithms: algorithms which update subsets of switches in each communication round only, where each subset in itself guarantees consistency. In this demo, we show how to change routing policies in a transiently consistent manner. We demonstrate two al- gorithms, namely, Wayup [5] and Peacock [4], which partition the network updates sent from SDN controller towards OpenFlow software switches into multiple rounds as per respective algorithms. Later, the barrier mes- sages are utilized to ensure reliable network updates.", "http://dl.acm.org/ft_gateway.cfm?id=2959083", "", "", "prog-tuesday");
      tprog_add_paper("A Transparent Highway for inter-Virtual Network Function Communication with Open vSwitch", "M. V&aacute;squez (Politecnico di Torino), I. Cerrato (Politecnico di Torino), F. Risso (Politecnico di Torino), D. Verbeiren (Tessares SA, Louvain-la-Neuve)", "This paper presents a software architecture that can dynamically and transparently establish direct communication paths between DPDK-based virtual network functions executed in virtual machines, by recognizing new point-to-point connections in traffic steering rules. We demonstrate the huge advantages of this architecture in terms of performance and the possibility to implement it with localized modifications in Open vSwitch and DPDK, without touching the VNFs.", "http://dl.acm.org/ft_gateway.cfm?id=2959068", "", "", "prog-tuesday");
      tprog_add_paper("Cases for Including a Reference Monitor to SDN", "D. Gkounis (NEC Laboratories Europe), F. Klaedtke (NEC Laboratories Europe), R. Bifulco (NEC Laboratories Europe), G. Karame (NEC Laboratories Europe)", "No abstract written.", "http://dl.acm.org/ft_gateway.cfm?id=2959066", "", "", "prog-tuesday");
      tprog_add_paper("High speed packet forwarding compiled from protocol independent data plane specifications", "S. Laki (E&ouml;tv&ouml;s Lor&aacute;nd University), D. Horp&aacute;csi (E&ouml;tv&ouml;s Lor&aacute;nd University), P. V&ouml;r&ouml;s (E&ouml;tv&ouml;s Lor&aacute;nd University), R. Kitlei (E&ouml;tv&ouml;s Lor&aacute;nd University), D. Lesk&oacute; (E&ouml;tv&ouml;s Lor&aacute;nd University), M. Tejfel (E&ouml;tv&ouml;s Lor&aacute;nd University)", "P4 is a high level language for programming network switches that allows for great flexibility in the description of packet structure and processing, independent of the specifics of the underlying hardware. In this demo, we present our prototype P4 compiler in which the hardware independent and hardware specific functionalities are separated. We have identified the requisites of the latter, which form the interface of our target specific Hardware Abstraction Library (HAL); the compiler turns P4 code into a target independent core program that is linked to this library and invokes its operations. The two stage separation improves portability: to support a new architecture, only the hardware dependent library has to be implemented. In the demo, we demonstrate the flexibility of our compiler with a HAL for Intel DPDK, and show the packet processing and forwarding performance of compiled switches in different scenarios.", "http://dl.acm.org/ft_gateway.cfm?id=2959080", "", "", "prog-tuesday");
      tprog_add_paper("Roaming Edge vNFs using Glasgow Network Functions", "R. Cziva (University of Glasgow), S. Jouet (University of Glasgow), D. Pezaros (University of Glasgow)", "While the network edge is becoming more important for the provision of customized services in next generation mobile networks, current NFV architectures are unsuitable to meet the increasing future demand. They rely on commodity servers with resource-hungry Virtual Machines that are unable to provide the high network function density and mobility requirements necessary for upcoming wide-area and 5G networks. In this demo, we showcase Glasgow Network Functions (GNF), a virtualization framework suitable for next generation mobile networks that exploits lightweight network functions (NFs) deployed at the edge and transparently following  users' devices as they roam between cells.", "http://dl.acm.org/ft_gateway.cfm?id=2959067", "", "", "prog-tuesday");
      tprog_add_paper("Modeling Native Software Components as Virtual Network Functions", "M. Baldi (Politecnico di Torino), R. Bonafiglia (Politecnico di Torino), F. Risso (Politecnico di Torino), A. Sapio (Politecnico di Torino)", "Virtual Network Functions (VNFs) are often realized using virtual machines (VMs) because they provide an isolated environment compatible with classical cloud computing technologies. However, VMs are demanding in terms of required resources (CPU and memory) and therefore not suitable for low-cost devices like residential gateways. Such equipment often runs a Linux-based operating system that includes by default a (large) number of common network functions, which can provide some of the services otherwise offered by simple VNFs, but with reduced overhead. In this paper those native software components are made available through a Network Function Virtualization (NFV) platform, thus making their use transparent from the VNF developer point of view.", "http://dl.acm.org/ft_gateway.cfm?id=2959069", "", "", "prog-tuesday");
      tprog_add_header("Wednesday, August 24, 2016", "prog-wednesday");
      tprog_add_session("9:00am - 5:30pm", "Session 2 - Demo presenters onsite during coffee breaks", "", "", "prog-wednesday");
      tprog_add_paper("Mininet-WiFi: A Platform for Hybrid Physical-Virtual Software-Defined Wireless Networking Research", "R. Fontes (University of Campinas), C. Rothenberg (University of Campinas), R. Fontes (University of Campinas)", "Software-Defined Wireless Networking (SDWN) is being considered an appealing paradigm to design and operate wireless networks through higher-level abstractions and programmatic interfaces such as the OpenFlow protocol. Identified benefits include cost savings, service velocity and customization, resource optimization through novel approaches to user mobility, traffic offloading, multi-layer and multi-path routing, and so on. This demonstration features Mininet-WiFi as a SDWN emulator with the ability to run realistic experiments in hybrid physical-virtual environments, where users attending the conference are able to experience first hand by connecting their devices and interacting with virtual WiFi stations in a wireless mesh network or reach the Internet through the emulated SDWN infrastructure. OpenFlow 1.3 metering and IP header re-writing actions will showcase HTTP flow redirection and rate limitation of real users' wireless traffic.", "http://dl.acm.org/ft_gateway.cfm?id=2959070", "", "", "prog-wednesday");
      tprog_add_paper("Multi-Domain Orchestration across RAN and Transport for 5G", "A. Rostami (Ericsson Research), P. &Ouml;hl&eacute;n (Ericsson Research), M. Santos (Ericsson Research), A. Vidal (Ericsson Research)", "End-to-End programmability across radio, transport and compute resources is a key enabler for the fifth generation of mobile communication networks (5G). In our work we look into how SDN can realize the required cross-domain programmability, as well as slicing of resources towards multiple clients. We present design and implementation of a hierarchical, modular and programmable orchestration architecture across radio access networks and transport networks. We demonstrate how the developed multi-domain orchestration improves the service creation as well as resource utilization across the domains using real-time monitoring.", "http://dl.acm.org/ft_gateway.cfm?id=2959073", "", "", "prog-wednesday");
      tprog_add_paper("Enabling Backscatter Communication among Commodity WiFi Radios", "P. Zhang (Stanford University), D. Bharadia (MIT), K. Joshi (Stanford University), S. Katti (Stanford University), P. Zhang (University of Massachusetts Amherst)", "We present the first low power backscatter system that can be deployed completely using commodity WiFi infrastructure. With this system, a low power tag reflects existing 802.11b transmissions from a commodity WiFi transmitter, and the backscattered signals can be decoded as a standard WiFi packet by a commodity 802.11b receiver. The key invention is a novel technique called \textbf{codeword translation}, which allows a backscatter tag to embed its information on standard 802.11b packets by just translating the original transmitted 802.11b codeword to another valid 802.11b codeword. This allows any 802.11b receiver to decode the backscattered packet, thus opening the doors for widespread deployment of low-power backscatter communication using widely available WiFi infrastructure. We show experimentally that we can achieve an uplink throughput of up to 1Mbps at ranges of up to 8m and ranges of up to 50m where it achieves a throughput of around 100Kbps, which is twice as better than the recently published passive WiFi system.", "http://dl.acm.org/ft_gateway.cfm?id=2959072", "", "", "prog-wednesday");
      tprog_add_paper("Off-the-Shelf Software-defined Wi-Fi Networks", "S. H&auml;t&ouml;nen (University of Helsinki), P. Savolainen (Helsinki Institute for Information Technology HIIT), A. Rao (University of Helsinki), H. Flinck (Nokia Bell Labs), S. Tarkoma (University of Helsinki)", "Wi-Fi networks were one of the first use-cases for Software-defined networking (SDN). However, to deploy a software-defined Wi-Fi network today, one has to rely on research prototypes with availability, documentation, hardware requirements, and scalability issues. To alleviate this situation, we demonstrate two simple techniques to bring SDN functionality to existing Wi-Fi networks and discuss their benefits and short-comings. Researchers can use our techniques to convert their existing Wi-Fi testbeds into software defined Wi-Fi testbeds. Our two techniques thus significantly lower the barrier-to-entry for deploying software-defined Wi-Fi networks.", "http://dl.acm.org/ft_gateway.cfm?id=2959071", "", "", "prog-wednesday");
      tprog_add_paper("ARTEMIS: Real-Time Detection and Automatic Mitigation for BGP Prefix Hijacking", "G. Chaviaras (FORTH), P. Gigis (FORTH), P. Sermpezis (FORTH), X. Dimitropoulos (FORTH)", "Prefix hijacking is a common phenomenon in the Internet that often causes routing problems and economic losses. In this demo, we propose ARTEMIS, a tool that enables network administrators to detect and mitigate prefix hijacking incidents, against their own prefixes. ARTEMIS is based on the real-time monitoring of BGP data in the Internet, and software-defined networking (SDN) principles, and can completely mitigate a prefix hijacking within a few minutes (e.g., 5-6mins in our experiments) after it has been~launched.", "http://dl.acm.org/ft_gateway.cfm?id=2959078", "", "", "prog-wednesday");
      tprog_add_paper("EasyApp: A Cross-platform Mobile Applications Development Environment Based on OSGi", "Z. Wang (Beijing University of Posts and Telecommunications), B. Cheng (Beijing University of Posts and Telecommunications), Z. Zhai (Beijing University of Posts and Telecommunications), Y. Jin (Beijing University of Posts and Telecommunications), Y. Feng (Beijing University of Posts and Telecommunications), J. Chen (Beijing University of Posts and Telecommunications)", "*** The rapid development of mobile internet abstracts many non-professional persons to creating mobile applications. Traditional development process cannot meet their needs. In this paper, we present a cross-platform mobile development environment based on OSGi framework, EasyApp. It provides a highly-integrated, UI-friendly and easily-operating environment. Applications are comprehensively developed with web techniques. Users could create mobile applications with draggable widgets. Native APIs of mobile phone can be invoked with abundant plugins. After designing, users could package and download applications of multiple platforms. ***", "http://dl.acm.org/ft_gateway.cfm?id=2959074", "", "", "prog-wednesday");
      tprog_add_paper("A 60Gbps DPI Prototype based on Memory-Centric FPGA", "J. Su (National Laboratory for Parallel and Distributed Processing / National University of Defense Technology), S. Chen (National University of Defense Technology), B. Han (National University of Defense Technology),C. Xu (National University of Defense Technology), X. Wang (National University of Defense Technology)", "Deep packet inspection (DPI) is widely used in content-aware network applications to detect string features. It is of vital importance to improve the DPI performance due to the ever-increasing link speed. In this demo, we propose a novel DPI architecture with a hierarchy memory structure and parallel matching engines based on memory-centric FPGA. The implemented DPI prototype is able to provide up to 60Gbps full-text string matching throughput and fast rules update speed.", "http://dl.acm.org/ft_gateway.cfm?id=2959079", "", "", "prog-wednesday");
      tprog_add_paper("Application Driven Network: providing On-Demand Services for Applications", "Y. Wang (Huawei Future Network Theory Lab), D. Lin (Huawei Future Network Theory Lab), C. Li (Huawei Future Network Theory Lab), J. Zhang (Huawei Wireless Technology Lab), P. Liu (Huawei Wireless Technology Lab), C. Hu (Xi'an Jiaotong University), G. Zhang (Huawei Future Network Theory Lab)", "Application Driven Network(ADN) is a new paradigm that provides on-demand differentiated services for applications. A physical network in ADN is sliced into various logically isolated sub-networks. Each network slice can have its own network architecture and protocol to serve one application exclusively. ADN enhances the user experience while keeping the resource efficiency by further imposing multiplexing among these logically isolated sub-networks.", "http://dl.acm.org/ft_gateway.cfm?id=2959075", "", "", "prog-wednesday");
      tprog_add_paper("Fibbing in action: On-demand load-balancing for better video delivery", "O. Tilmans (Universit&eacute; Catholique de Louvain), S. Vissicchio (Universit&eacute; Catholique de Louvain), L. Vanbever (ETH Z&uuml;rich), J. Rexford (Princeton University)", "Video streaming, in conjunction with social networks, have given birth to a new traffic pattern over the Internet: transient, localized traffic surges, known as flash crowds. Traditional traffic-engineering methods can hardly cope with these surges, as they are unpredictable by nature. Consequently, networks either have to be over-provisioned, which is expensive and wastes resources, or risk to periodically incur congestion, which infuriates customers. This demonstration shows how Fibbing can improve network performance and preserve users&rsquo; quality of experience when accessing video streams, by implementing a fine-grained load-balancing service. This service leverages two unique features of Fibbing: programming per destination load-balancing and implementing uneven splitting ratios.", "http://dl.acm.org/ft_gateway.cfm?id=2959084", "", "", "prog-wednesday");
?>
    </ul>
  </div>
