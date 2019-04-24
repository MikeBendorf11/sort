<?php
  $json = '
  [
    {
      "NodeLevel": 0,
      "NodeScore": 0,
      "MatchType": "null - null",
      "InfocusAttribute": {
        "Id": "",
        "Attribute": "Deposit",
        "Value": "deposit_Au-Ag-TeVeins - deposit",
        "Frequency": "present",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": "Deposit",
        "Value": "deposit_BRZ592992 - deposit",
        "Frequency": "present",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": null,
      "Advice": null
    },
    {
      "NodeLevel": 1,
      "NodeScore": 0,
      "MatchType": "equivalent_ppts - disoint",
      "InfocusAttribute": {
        "Id": "6417_4",
        "Attribute": "depositHasAge",
        "Value": "http://resource.geosciml.org/classifier/ics/ischart/Danian-Piacenzian - http://resource.geosciml.org/classifier/ics/ischart/Danian-Piacenzian",
        "Frequency": "sometimes",
        "Label": "Danian-Piacenzian",
        "Comment": "",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "592992_22",
        "Attribute": "depositHasAgeNumeric",
        "Value": "1547-2554 - 1547-2554",
        "Frequency": "present",
        "Label": "1547-2554 ma",
        "Comment": "",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"value_taxonomic_trace\":\"1547-2554 is disjointed with Danian-Piacenzian .\",\"attribute_taxonomic_trace\":\"depositHasAgeNumeric is equivalent to depositHasAge .\",\"score_trace\":\"The weighted base reward of intervals for frequency sometimes(IF) and present(T) = 0.0. Multiplier (determined by the interval relations and frequency) = 1. Reward = 0.0*1 =0. Reward is scaled by 1. Therefore Final Score = 0*1 =0. \",\"descendants_score\":\"Score for matching the descendant attributes of the current values: 0. \"}",
      "Advice": ""
    },
    {
      "NodeLevel": 1,
      "NodeScore": 0,
      "MatchType": "equivalent_ppts - disjoint",
      "InfocusAttribute": {
        "Id": "6417_3",
        "Attribute": "depositHasAge",
        "Value": "http://resource.geosciml.org/classifier/ics/ischart/Cretaceous-Cretaceous - http://resource.geosciml.org/classifier/ics/ischart/Cretaceous-Cretaceous",
        "Frequency": "sometimes",
        "Label": "Cretaceous",
        "Comment": "",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "592992_25",
        "Attribute": "depositHasAgeNumeric",
        "Value": "546-570 - 546-570",
        "Frequency": "present",
        "Label": "546-570 ma",
        "Comment": "",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"value_taxonomic_trace\":\"546-570 is disjointed with Cretaceous-Cretaceous .\",\"attribute_taxonomic_trace\":\"depositHasAgeNumeric is equivalent to depositHasAge .\",\"score_trace\":\"The weighted base reward of intervals for frequency sometimes(IF) and present(T) = 0.0. Multiplier (determined by the interval relations and frequency) = 1. Reward = 0.0*1 =0. Reward is scaled by 1. Therefore Final Score = 0*1 =0. \",\"descendants_score\":\"Score for matching the descendant attributes of the current values: 0. \"}",
      "Advice": ""
    },
    {
      "NodeLevel": 1,
      "NodeScore": -10,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_2071",
        "Attribute": "depositHasElementEnhanced",
        "Value": "element_13 - Te",
        "Frequency": "usually",
        "Label": "Te",
        "Comment": "",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null\"}",
      "Advice": "[{  \"infocusInfo\":\"The model states that Te is usually present at enhanced levels.\",  \"suggestion\":\"Check whether the instance has Te present at enhanced levels.\",  \"yes\":\"If so, the score improves by %s.\",  \"no\":\"If not, the score decreases by %s.\",  \"yesScore\":9010,  \"noScore\":8990}]"
    },
    {
      "NodeLevel": 1,
      "NodeScore": -10,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_10000",
        "Attribute": "depositHasElementMznEnhanced",
        "Value": "element_14 - Cu",
        "Frequency": "sometimes",
        "Label": "Cu",
        "Comment": "Propagated",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null\"}",
      "Advice": "[{  \"infocusInfo\":\"The model states that Cu is sometimes present at enhanced levels.\",  \"suggestion\":\"Check whether the instance has Cu present at enhanced levels.\",  \"yes\":\"If so, the score improves by %s.\",  \"no\":\"If not, the score decreases by %s.\",  \"yesScore\":1010,  \"noScore\":990}]"
    },
    {
      "NodeLevel": 1,
      "NodeScore": -10,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_10016",
        "Attribute": "depositHasMineralMznEnhanced",
        "Value": "mineral_30 - Galena",
        "Frequency": "sometimes",
        "Label": "Galena",
        "Comment": "Propagated",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null\"}",
      "Advice": "[{  \"infocusInfo\":\"The model states that Galena is sometimes present at enhanced levels.\",  \"suggestion\":\"Check whether the instance has Galena present at enhanced levels.\",  \"yes\":\"If so, the score improves by %s.\",  \"no\":\"If not, the score decreases by %s.\",  \"yesScore\":1010,  \"noScore\":990}]"
    },
    {
      "NodeLevel": 1,
      "NodeScore": -10,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_10018",
        "Attribute": "depositHasMineralMznEnhanced",
        "Value": "mineral_32 - Tetrahedrite",
        "Frequency": "sometimes",
        "Label": "Tetrahedrite",
        "Comment": "Propagated",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null\"}",
      "Advice": "[{  \"infocusInfo\":\"The model states that Tetrahedrite is sometimes present at enhanced levels.\",  \"suggestion\":\"Check whether the instance has Tetrahedrite present at enhanced levels.\",  \"yes\":\"If so, the score improves by %s.\",  \"no\":\"If not, the score decreases by %s.\",  \"yesScore\":1010,  \"noScore\":990}]"
    },
    {
      "NodeLevel": 1,
      "NodeScore": -10,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_10017",
        "Attribute": "depositHasMineralMznEnhanced",
        "Value": "mineral_31 - Sphalerite",
        "Frequency": "sometimes",
        "Label": "Sphalerite",
        "Comment": "Propagated",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null\"}",
      "Advice": "[{  \"infocusInfo\":\"The model states that Sphalerite is sometimes present at enhanced levels.\",  \"suggestion\":\"Check whether the instance has Sphalerite present at enhanced levels.\",  \"yes\":\"If so, the score improves by %s.\",  \"no\":\"If not, the score decreases by %s.\",  \"yesScore\":1010,  \"noScore\":990}]"
    },
    {
      "NodeLevel": 1,
      "NodeScore": 1000,
      "MatchType": "equivalent_ppts - exact_exact_val",
      "InfocusAttribute": {
        "Id": "6417_10020",
        "Attribute": "depositHasMineralMznEnhanced",
        "Value": "mineral_34 - Quartz",
        "Frequency": "sometimes",
        "Label": "Quartz",
        "Comment": "Propagated",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "592992_5",
        "Attribute": "depositHasMineralEnhanced",
        "Value": "mineral_01 - Quartz",
        "Frequency": "present",
        "Label": "Quartz",
        "Comment": "Mineral(s) are enhanced from the alteration type. From mineral occurrences.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"value_taxonomic_trace\":\"Quartz is the same type as Quartz .\",\"attribute_taxonomic_trace\":\"depositHasMineralEnhanced is equivalent to depositHasMineralMznEnhanced .\",\"score_trace\":\"The weighted base reward of attributes for frequency sometimes(IF) and present(T) = 1000. Multiplier for equivalent match (determined by the semantic distance between them and their class levels) = 1. Therefore Score =  1000*1 =1000.\",\"descendants_score\":\"Score for matching the descendant attributes of the current values: 0. \"}",
      "Advice": ""
    },
    {
      "NodeLevel": 1,
      "NodeScore": -10,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_10019",
        "Attribute": "depositHasMineralMznEnhanced",
        "Value": "mineral_33 - Stibnite",
        "Frequency": "sometimes",
        "Label": "Stibnite",
        "Comment": "Propagated",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null\"}",
      "Advice": "[{  \"infocusInfo\":\"The model states that Stibnite is sometimes present at enhanced levels.\",  \"suggestion\":\"Check whether the instance has Stibnite present at enhanced levels.\",  \"yes\":\"If so, the score improves by %s.\",  \"no\":\"If not, the score decreases by %s.\",  \"yesScore\":1010,  \"noScore\":990}]"
    },
    {
      "NodeLevel": 1,
      "NodeScore": -10,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_10022",
        "Attribute": "depositHasMineralMznEnhanced",
        "Value": "mineral_36 - Barite",
        "Frequency": "sometimes",
        "Label": "Barite",
        "Comment": "Propagated",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null\"}",
      "Advice": "[{  \"infocusInfo\":\"The model states that Barite is sometimes present at enhanced levels.\",  \"suggestion\":\"Check whether the instance has Barite present at enhanced levels.\",  \"yes\":\"If so, the score improves by %s.\",  \"no\":\"If not, the score decreases by %s.\",  \"yesScore\":1010,  \"noScore\":990}]"
    },
    {
      "NodeLevel": 1,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": "null - null",
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "592992_7",
        "Attribute": "depositHasForm",
        "Value": "form_02 - shear_zone",
        "Frequency": "present",
        "Label": "shear zone",
        "Comment": "Falha ou zona de cisalhamento extensional,Falha ou zona de cisalhamento compressional,Falha ou zona de cisalhamento indiscriminada. Compressional fault or shear zone,Fault or indiscriminate shear zone,extensional fault or shear zone. From structures file.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"null_entity\"}",
      "Advice": ""
    },
    {
      "NodeLevel": 1,
      "NodeScore": -10,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_10021",
        "Attribute": "depositHasMineralMznEnhanced",
        "Value": "mineral_35 - Calcite",
        "Frequency": "sometimes",
        "Label": "Calcite",
        "Comment": "Propagated",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null\"}",
      "Advice": "[{  \"infocusInfo\":\"The model states that Calcite is sometimes present at enhanced levels.\",  \"suggestion\":\"Check whether the instance has Calcite present at enhanced levels.\",  \"yes\":\"If so, the score improves by %s.\",  \"no\":\"If not, the score decreases by %s.\",  \"yesScore\":1010,  \"noScore\":990}]"
    },
    {
      "NodeLevel": 1,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": "null - null",
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "592992_6",
        "Attribute": "depositHasForm",
        "Value": "form_01 - fault",
        "Frequency": "present",
        "Label": "fault",
        "Comment": "Falha ou zona de cisalhamento extensional,Falha ou zona de cisalhamento compressional,Falha ou zona de cisalhamento indiscriminada. Compressional fault or shear zone,Fault or indiscriminate shear zone,extensional fault or shear zone. From structures file.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"null_entity\"}",
      "Advice": ""
    },
    {
      "NodeLevel": 1,
      "NodeScore": -10,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_10024",
        "Attribute": "depositHasMineralMznEnhanced",
        "Value": "mineral_38 - Celestine",
        "Frequency": "sometimes",
        "Label": "Celestine",
        "Comment": "Propagated",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null\"}",
      "Advice": "[{  \"infocusInfo\":\"The model states that Celestine is sometimes present at enhanced levels.\",  \"suggestion\":\"Check whether the instance has Celestine present at enhanced levels.\",  \"yes\":\"If so, the score improves by %s.\",  \"no\":\"If not, the score decreases by %s.\",  \"yesScore\":1010,  \"noScore\":990}]"
    },
    {
      "NodeLevel": 1,
      "NodeScore": -10,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_10005",
        "Attribute": "depositHasElementMznEnhanced",
        "Value": "element_19 - F",
        "Frequency": "sometimes",
        "Label": "F",
        "Comment": "Propagated",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null\"}",
      "Advice": "[{  \"infocusInfo\":\"The model states that F is sometimes present at enhanced levels.\",  \"suggestion\":\"Check whether the instance has F present at enhanced levels.\",  \"yes\":\"If so, the score improves by %s.\",  \"no\":\"If not, the score decreases by %s.\",  \"yesScore\":1010,  \"noScore\":990}]"
    },
    {
      "NodeLevel": 1,
      "NodeScore": -10,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_10023",
        "Attribute": "depositHasMineralMznEnhanced",
        "Value": "mineral_37 - Fluorite",
        "Frequency": "sometimes",
        "Label": "Fluorite",
        "Comment": "Propagated",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null\"}",
      "Advice": "[{  \"infocusInfo\":\"The model states that Fluorite is sometimes present at enhanced levels.\",  \"suggestion\":\"Check whether the instance has Fluorite present at enhanced levels.\",  \"yes\":\"If so, the score improves by %s.\",  \"no\":\"If not, the score decreases by %s.\",  \"yesScore\":1010,  \"noScore\":990}]"
    },
    {
      "NodeLevel": 1,
      "NodeScore": -10,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_10003",
        "Attribute": "depositHasElementMznEnhanced",
        "Value": "element_17 - Sb",
        "Frequency": "sometimes",
        "Label": "Sb",
        "Comment": "Propagated",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null\"}",
      "Advice": "[{  \"infocusInfo\":\"The model states that Sb is sometimes present at enhanced levels.\",  \"suggestion\":\"Check whether the instance has Sb present at enhanced levels.\",  \"yes\":\"If so, the score improves by %s.\",  \"no\":\"If not, the score decreases by %s.\",  \"yesScore\":1010,  \"noScore\":990}]"
    },
    {
      "NodeLevel": 1,
      "NodeScore": -10,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_10025",
        "Attribute": "depositHasMineralMznEnhanced",
        "Value": "mineral_39 - Roscoelite",
        "Frequency": "sometimes",
        "Label": "Roscoelite",
        "Comment": "Propagated",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null\"}",
      "Advice": "[{  \"infocusInfo\":\"The model states that Roscoelite is sometimes present at enhanced levels.\",  \"suggestion\":\"Check whether the instance has Roscoelite present at enhanced levels.\",  \"yes\":\"If so, the score improves by %s.\",  \"no\":\"If not, the score decreases by %s.\",  \"yesScore\":1010,  \"noScore\":990}]"
    },
    {
      "NodeLevel": 1,
      "NodeScore": -10,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_10004",
        "Attribute": "depositHasElementMznEnhanced",
        "Value": "element_18 - Hg",
        "Frequency": "sometimes",
        "Label": "Hg",
        "Comment": "Propagated",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null\"}",
      "Advice": "[{  \"infocusInfo\":\"The model states that Hg is sometimes present at enhanced levels.\",  \"suggestion\":\"Check whether the instance has Hg present at enhanced levels.\",  \"yes\":\"If so, the score improves by %s.\",  \"no\":\"If not, the score decreases by %s.\",  \"yesScore\":1010,  \"noScore\":990}]"
    },
    {
      "NodeLevel": 1,
      "NodeScore": -10,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_10001",
        "Attribute": "depositHasElementMznEnhanced",
        "Value": "element_15 - Pb",
        "Frequency": "sometimes",
        "Label": "Pb",
        "Comment": "Propagated",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null\"}",
      "Advice": "[{  \"infocusInfo\":\"The model states that Pb is sometimes present at enhanced levels.\",  \"suggestion\":\"Check whether the instance has Pb present at enhanced levels.\",  \"yes\":\"If so, the score improves by %s.\",  \"no\":\"If not, the score decreases by %s.\",  \"yesScore\":1010,  \"noScore\":990}]"
    },
    {
      "NodeLevel": 1,
      "NodeScore": -10,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_10002",
        "Attribute": "depositHasElementMznEnhanced",
        "Value": "element_16 - Zn",
        "Frequency": "sometimes",
        "Label": "Zn",
        "Comment": "Propagated",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null\"}",
      "Advice": "[{  \"infocusInfo\":\"The model states that Zn is sometimes present at enhanced levels.\",  \"suggestion\":\"Check whether the instance has Zn present at enhanced levels.\",  \"yes\":\"If so, the score improves by %s.\",  \"no\":\"If not, the score decreases by %s.\",  \"yesScore\":1010,  \"noScore\":990}]"
    },
    {
      "NodeLevel": 1,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_77",
        "Attribute": "depositHasWeathering",
        "Value": "weathassemblage_1 - Weathering",
        "Frequency": "sometimes",
        "Label": "weathassemblage_1",
        "Comment": "weathAssemblage 1.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_placeholder\"}",
      "Advice": ""
    },
    {
      "NodeLevel": 2,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_80",
        "Attribute": "weatheringHasMineralEnhanced",
        "Value": "mineral_04 - Emmonsite",
        "Frequency": "sometimes",
        "Label": "Emmonsite",
        "Comment": "Tellurium redeposited as green oxide.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_descendent_ent\"}",
      "Advice": "No advice for entity null descendent"
    },
    {
      "NodeLevel": 3,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_2039",
        "Attribute": "mineralEnhancedHasColour",
        "Value": "colour_02 - green",
        "Frequency": "always",
        "Label": "green",
        "Comment": "",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_descendent_ent\"}",
      "Advice": "No advice for entity null descendent"
    },
    {
      "NodeLevel": 2,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_2035",
        "Attribute": "weatheringHasMineralDepleted",
        "Value": "mineral_24 - Tellurides",
        "Frequency": "sometimes",
        "Label": "Tellurides",
        "Comment": "tellurides.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_descendent_ent\"}",
      "Advice": "No advice for entity null descendent"
    },
    {
      "NodeLevel": 1,
      "NodeScore": -10,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_10027",
        "Attribute": "depositHasMineralEnhancedToOre",
        "Value": "mineral_41 - Gold",
        "Frequency": "sometimes",
        "Label": "Gold",
        "Comment": "Propagated",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null\"}",
      "Advice": "[{  \"infocusInfo\":\"The model states that Gold is sometimes present at enhanced to ore levels.\",  \"suggestion\":\"Check whether the instance has Gold present at enhanced to ore levels.\",  \"yes\":\"If so, the score improves by %s.\",  \"no\":\"If not, the score decreases by %s.\",  \"yesScore\":1010,  \"noScore\":990}]"
    },
    {
      "NodeLevel": 1,
      "NodeScore": -10,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_10026",
        "Attribute": "depositHasMineralMznEnhanced",
        "Value": "mineral_40 - Adularia",
        "Frequency": "sometimes",
        "Label": "Adularia",
        "Comment": "Propagated",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null\"}",
      "Advice": "[{  \"infocusInfo\":\"The model states that Adularia is sometimes present at enhanced levels.\",  \"suggestion\":\"Check whether the instance has Adularia present at enhanced levels.\",  \"yes\":\"If so, the score improves by %s.\",  \"no\":\"If not, the score decreases by %s.\",  \"yesScore\":1010,  \"noScore\":990}]"
    },
    {
      "NodeLevel": 1,
      "NodeScore": -10,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_10029",
        "Attribute": "depositHasMineralMznEnhanced",
        "Value": "mineral_43 - Emmonsite",
        "Frequency": "sometimes",
        "Label": "Emmonsite",
        "Comment": "Propagated",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null\"}",
      "Advice": "[{  \"infocusInfo\":\"The model states that Emmonsite is sometimes present at enhanced levels.\",  \"suggestion\":\"Check whether the instance has Emmonsite present at enhanced levels.\",  \"yes\":\"If so, the score improves by %s.\",  \"no\":\"If not, the score decreases by %s.\",  \"yesScore\":1010,  \"noScore\":990}]"
    },
    {
      "NodeLevel": 1,
      "NodeScore": -10,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_10028",
        "Attribute": "depositHasMineralMznDepleted",
        "Value": "mineral_42 - Tellurides",
        "Frequency": "sometimes",
        "Label": "Tellurides",
        "Comment": "Propagated",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null\"}",
      "Advice": "[{  \"infocusInfo\":\"The model states that Tellurides are sometimes present.\",  \"suggestion\":\"Check whether the instance has Tellurides present.\",  \"yes\":\"If so, the score improves by %s.\",  \"no\":\"If not, the score decreases by %s.\",  \"yesScore\":1010,  \"noScore\":990}]"
    },
    {
      "NodeLevel": 1,
      "NodeScore": 0,
      "MatchType": "equivalent_ppts - disjoint",
      "InfocusAttribute": {
        "Id": "6417_3",
        "Attribute": "depositHasAge",
        "Value": "http://resource.geosciml.org/classifier/ics/ischart/Cretaceous-Cretaceous - http://resource.geosciml.org/classifier/ics/ischart/Cretaceous-Cretaceous",
        "Frequency": "sometimes",
        "Label": "Cretaceous",
        "Comment": "",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "592992_23",
        "Attribute": "depositHasAgeNumeric",
        "Value": "375-389 - 375-389",
        "Frequency": "present",
        "Label": "375-389 ma",
        "Comment": "",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"value_taxonomic_trace\":\"375-389 is disjointed with Cretaceous-Cretaceous .\",\"attribute_taxonomic_trace\":\"depositHasAgeNumeric is equivalent to depositHasAge .\",\"score_trace\":\"The weighted base reward of intervals for frequency sometimes(IF) and present(T) = 0.0. Multiplier (determined by the interval relations and frequency) = 1. Reward = 0.0*1 =0. Reward is scaled by 1. Therefore Final Score = 0*1 =0. \",\"descendants_score\":\"Score for matching the descendant attributes of the current values: 0. \"}",
      "Advice": ""
    },
    {
      "NodeLevel": 1,
      "NodeScore": 0,
      "MatchType": "equivalent_ppts - disjoint",
      "InfocusAttribute": {
        "Id": "6417_3",
        "Attribute": "depositHasAge",
        "Value": "http://resource.geosciml.org/classifier/ics/ischart/Cretaceous-Cretaceous - http://resource.geosciml.org/classifier/ics/ischart/Cretaceous-Cretaceous",
        "Frequency": "sometimes",
        "Label": "Cretaceous",
        "Comment": "",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "592992_22",
        "Attribute": "depositHasAgeNumeric",
        "Value": "1547-2554 - 1547-2554",
        "Frequency": "present",
        "Label": "1547-2554 ma",
        "Comment": "",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"value_taxonomic_trace\":\"1547-2554 is disjointed with Cretaceous-Cretaceous .\",\"attribute_taxonomic_trace\":\"depositHasAgeNumeric is equivalent to depositHasAge .\",\"score_trace\":\"The weighted base reward of intervals for frequency sometimes(IF) and present(T) = 0.0. Multiplier (determined by the interval relations and frequency) = 1. Reward = 0.0*1 =0. Reward is scaled by 1. Therefore Final Score = 0*1 =0. \",\"descendants_score\":\"Score for matching the descendant attributes of the current values: 0. \"}",
      "Advice": ""
    },
    {
      "NodeLevel": 1,
      "NodeScore": 800,
      "MatchType": "exact_exact_ppt - AKO_exact_val",
      "InfocusAttribute": {
        "Id": "6417_2034",
        "Attribute": "depositHasSettingGenetic",
        "Value": "setting_02 - arc",
        "Frequency": "sometimes",
        "Label": "arc",
        "Comment": "Late shoshonitic stage of volcanism in island arcs.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "592992_17",
        "Attribute": "depositHasSettingGenetic",
        "Value": "setting_01 - arc_systems",
        "Frequency": "present",
        "Label": "arc systems",
        "Comment": "intraplaca,margem ativa de placa. active margin,intraplate. From tectonics file.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"value_taxonomic_trace\":\"arc_systems is a kind of arc .\",\"attribute_taxonomic_trace\":\"depositHasSettingGenetic is the same attribute as depositHasSettingGenetic .\",\"score_trace\":\"The weighted base reward of values for frequency sometimes(IF) and present(T) = 1000. Multiplier for possible match (determined by the semantic distance between them and their class levels) = 0.8. Therefore Score = 1000*0.8 =800.\",\"descendants_score\":\"Score for matching the descendant attributes of the current values: 0. \"}",
      "Advice": "[{  \"infocusInfo\":\"The model states that arc is sometimes present.\",  \"targetInfo\":\"The instance states that arc systems are present.\",  \"suggestion\":\"Check whether the present arc system is arc.\",  \"yes\":\"If so, the score improves by %s.\",  \"no\":\"If not, the score decreases by %s.\",  \"yesScore\":200,  \"noScore\":1800}]"
    },
    {
      "NodeLevel": 1,
      "NodeScore": 1000,
      "MatchType": "exact_exact_ppt - exact_exact_val",
      "InfocusAttribute": {
        "Id": "6417_2033",
        "Attribute": "depositHasSettingGenetic",
        "Value": "setting_01 - craton",
        "Frequency": "sometimes",
        "Label": "craton",
        "Comment": "Tectonic Setting; Disrupted Precambrian craton with thin Phanerozoic cover. Depositional Environment; Volcanic centres, caldera rims &amp; caldera-fill breccias.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "592992_20",
        "Attribute": "depositHasSettingGenetic",
        "Value": "setting_04 - craton",
        "Frequency": "present",
        "Label": "craton",
        "Comment": "REMANESCENTES DE EMBASAMENTO ARQUEANO/PALEOPROTEROZOICO. Paleoproterozoic/Archean basement remnants. From tectonics file.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"value_taxonomic_trace\":\"craton is the same type as craton .\",\"attribute_taxonomic_trace\":\"depositHasSettingGenetic is the same attribute as depositHasSettingGenetic .\",\"score_trace\":\"The weighted base reward of values for frequency sometimes(IF) and present(T) = 1000. Multiplier for exact match (determined by the semantic distance between them and their class levels) = 1. Therefore Score = 1000*1 =1000.\",\"descendants_score\":\"Score for matching the descendant attributes of the current values: 0. \"}",
      "Advice": ""
    },
    {
      "NodeLevel": 1,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": "null - null",
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "592992_18",
        "Attribute": "depositHasSettingGenetic",
        "Value": "setting_02 - intraplate",
        "Frequency": "present",
        "Label": "intraplate",
        "Comment": "intraplaca,margem ativa de placa. active margin,intraplate. From tectonics file.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"null_entity\"}",
      "Advice": ""
    },
    {
      "NodeLevel": 1,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": "null - null",
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "592992_19",
        "Attribute": "depositHasSettingGenetic",
        "Value": "setting_03 - very_high_grade",
        "Frequency": "present",
        "Label": "very high grade",
        "Comment": ",terreno granulitico. granulite terrain,. From tectonics file.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"null_entity\"}",
      "Advice": ""
    },
    {
      "NodeLevel": 1,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": "null - null",
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "592992_21",
        "Attribute": "depositHasSettingGenetic",
        "Value": "setting_05 - basement",
        "Frequency": "present",
        "Label": "basement",
        "Comment": "REMANESCENTES DE EMBASAMENTO ARQUEANO/PALEOPROTEROZOICO. Paleoproterozoic/Archean basement remnants. From tectonics file.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"null_entity\"}",
      "Advice": ""
    },
    {
      "NodeLevel": 1,
      "NodeScore": -10,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_2041",
        "Attribute": "depositHasRockHost",
        "Value": "earthmaterial_08 - ash_tuff_lapillistone_and_lapilli_tuff",
        "Frequency": "sometimes",
        "Label": "ash_tuff_lapillistone_and_lapilli_tuff",
        "Comment": "lapilli-tuff. Rock def.&#169;BGS. Lithified poorly sorted clastic material &gt;10% debris formed by volcanic processes, &gt;75vol% pyroclastic fragments, 25-75% lapilli 2-64mm; a pyroclastic rock, IUGS term.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null\"}",
      "Advice": "[{  \"infocusInfo\":\"The model states that ash, tuff-lapillistone, and lapilli-tuff is sometimes present.\",  \"suggestion\":\"Check whether the instance has ash, tuff-lapillistone, and lapilli-tuff present.\",  \"yes\":\"If so, the score improves by %s.\",  \"no\":\"If not, the score decreases by %s.\",  \"yesScore\":1010,  \"noScore\":990}]"
    },
    {
      "NodeLevel": 1,
      "NodeScore": -10,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_69",
        "Attribute": "depositHasRockHost",
        "Value": "earthmaterial_07 - exotic_alkaline_rock",
        "Frequency": "sometimes",
        "Label": "exotic_alkaline_rock",
        "Comment": "monchiquite. Rock def.&#169;BGS. Exotic crystalline intrusive/extrusive melano-mesocratic panidiomorphic rock; matrix glass or foid, dominant mafic minerals phenocrystic barkevikite, kaersutite+Ti-rich augite+oli+biot; diopsidic aug, hornb, melil rare/absent; a lamprophyre",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null\"}",
      "Advice": "[{  \"infocusInfo\":\"The model states that exotic alkaline rock is sometimes present.\",  \"suggestion\":\"Check whether the instance has exotic alkaline rock present.\",  \"yes\":\"If so, the score improves by %s.\",  \"no\":\"If not, the score decreases by %s.\",  \"yesScore\":1010,  \"noScore\":990}]"
    },
    {
      "NodeLevel": 1,
      "NodeScore": -10,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_61",
        "Attribute": "depositHasRockHost",
        "Value": "earthmaterial_06 - latitic_rock",
        "Frequency": "sometimes",
        "Label": "latitic_rock",
        "Comment": "vogesite. Rck def.&#169;BGS. Exotic crystalline intrusive/extrusive melano-mesocratic panidiomorphic rock; matrix orthocl&gt;plag, predominant mafic minerals phenocrystic hbl+diopsidic augite+/-olivine; felspathoid, biotite, Ti-rich aug, melilite rare/absent; a lamprophyre",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null\"}",
      "Advice": "[{  \"infocusInfo\":\"The model states that latitic rock is sometimes present.\",  \"suggestion\":\"Check whether the instance has latitic rock present.\",  \"yes\":\"If so, the score improves by %s.\",  \"no\":\"If not, the score decreases by %s.\",  \"yesScore\":1010,  \"noScore\":990}]"
    },
    {
      "NodeLevel": 1,
      "NodeScore": -10,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_53",
        "Attribute": "depositHasRockHost",
        "Value": "earthmaterial_05 - basalt",
        "Frequency": "sometimes",
        "Label": "basalt",
        "Comment": "shoshonite. Rock def.&#169;BGS. Fine-grained, av. 0.25mm normal crystalline extrusive/intrusive rock; TAS SiO2 49.4-57wt%, Na2O+K2O 5-9.3wt%, (Na2O-2.0)&lt;K2O. Potassic basaltic-trachyandesite",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null\"}",
      "Advice": "[{  \"infocusInfo\":\"The model states that basalt is sometimes present.\",  \"suggestion\":\"Check whether the instance has basalt present.\",  \"yes\":\"If so, the score improves by %s.\",  \"no\":\"If not, the score decreases by %s.\",  \"yesScore\":1010,  \"noScore\":990}]"
    },
    {
      "NodeLevel": 1,
      "NodeScore": -10,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_34",
        "Attribute": "depositHasRockHost",
        "Value": "earthmaterial_04 - monzonite",
        "Frequency": "sometimes",
        "Label": "monzonite",
        "Comment": "Rock def.&#169;BGS. Coarse-grained, av. between 2-16mm normal crystalline intrusive rock; quartz &lt;5% of QAPF, feldspar 35-65% plagioclase, +/- mica/amphibole",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null\"}",
      "Advice": "[{  \"infocusInfo\":\"The model states that Monzonite is sometimes present.\",  \"suggestion\":\"Check whether the instance has Monzonite present.\",  \"yes\":\"If so, the score improves by %s.\",  \"no\":\"If not, the score decreases by %s.\",  \"yesScore\":1010,  \"noScore\":990}]"
    },
    {
      "NodeLevel": 1,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": "null - null",
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "592992_2",
        "Attribute": "depositHasAlterationType",
        "Value": "alterationtype_01 - silicic",
        "Frequency": "present",
        "Label": "silicic",
        "Comment": "Silicifica&#195;ƒ&#194;&#167;&#195;ƒ&#194;&#163;o. Silicification. From mineral occurrences.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"null_entity\"}",
      "Advice": ""
    },
    {
      "NodeLevel": 1,
      "NodeScore": -10,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_26",
        "Attribute": "depositHasRockHost",
        "Value": "earthmaterial_03 - diorite",
        "Frequency": "sometimes",
        "Label": "diorite",
        "Comment": "Rock def.&#169;BGS. Coarse-grained, av. between 2-16mm normal crystalline intrusive rock; quartz &lt;5% of QAPF, feldspar &gt;90% plagioclase (&lt;50% An), +/- mica/pyroxene/amphibole/olivine",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null\"}",
      "Advice": "[{  \"infocusInfo\":\"The model states that diorite is sometimes present.\",  \"suggestion\":\"Check whether the instance has diorite present.\",  \"yes\":\"If so, the score improves by %s.\",  \"no\":\"If not, the score decreases by %s.\",  \"yesScore\":1010,  \"noScore\":990}]"
    },
    {
      "NodeLevel": 1,
      "NodeScore": -10,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_18",
        "Attribute": "depositHasRockHost",
        "Value": "earthmaterial_02 - phonolite",
        "Frequency": "sometimes",
        "Label": "phonolite",
        "Comment": "Rock def.&#169;BGS. Fine-grained, av. &lt;0.25mm normal crystalline extrusive/intrusive rock; feldspathoids 10-60% of QAPF, feldspar &gt;90% alkali feldspar,TAS SiO2 &gt;48.4wt%, Na2O+K2O &gt;11.7wt%, +/-mica/amphibole/pyroxene;  clinkstone",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null\"}",
      "Advice": "[{  \"infocusInfo\":\"The model states that phonolite is sometimes present.\",  \"suggestion\":\"Check whether the instance has phonolite present.\",  \"yes\":\"If so, the score improves by %s.\",  \"no\":\"If not, the score decreases by %s.\",  \"yesScore\":1010,  \"noScore\":990}]"
    },
    {
      "NodeLevel": 1,
      "NodeScore": -10,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_10",
        "Attribute": "depositHasRockHost",
        "Value": "earthmaterial_01 - syenite",
        "Frequency": "sometimes",
        "Label": "syenite",
        "Comment": "Rock def.&#169;BGS. Coarse-grained, av. between 2-16mm normal crystalline intrusive rock; quartz&lt; 5% of QAPF, feldspar 65-90% alkali feldspar, +/- mica/amphibole",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null\"}",
      "Advice": "[{  \"infocusInfo\":\"The model states that syenite is sometimes present.\",  \"suggestion\":\"Check whether the instance has syenite present.\",  \"yes\":\"If so, the score improves by %s.\",  \"no\":\"If not, the score decreases by %s.\",  \"yesScore\":1010,  \"noScore\":990}]"
    },
    {
      "NodeLevel": 1,
      "NodeScore": -10,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_2042",
        "Attribute": "depositHasRockHost",
        "Value": "earthmaterial_09 - fragmental_igneous_rock",
        "Frequency": "sometimes",
        "Label": "fragmental_igneous_rock",
        "Comment": "volcaniclastic-breccia. Rock def.&#169;BGS. Unlithified clastic material &gt;10vol% debris formed by volcanic processes, 10-25vol% pyroclastic fragments, av. &gt;2mm, dominantly angular (lapilli/blocks&gt;bombs,) composition not defined",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null\"}",
      "Advice": "[{  \"infocusInfo\":\"The model states that fragmental igneous rock is sometimes present.\",  \"suggestion\":\"Check whether the instance has fragmental igneous rock present.\",  \"yes\":\"If so, the score improves by %s.\",  \"no\":\"If not, the score decreases by %s.\",  \"yesScore\":1010,  \"noScore\":990}]"
    },
    {
      "NodeLevel": 1,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_179",
        "Attribute": "depositHasZoneOut",
        "Value": "zoneout_4 - ZoneOut",
        "Frequency": "sometimes",
        "Label": "zoneout_4",
        "Comment": "zoneOut 4.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_placeholder\"}",
      "Advice": ""
    },
    {
      "NodeLevel": 1,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_161",
        "Attribute": "depositHasZoneOut",
        "Value": "zoneout_2 - ZoneOut",
        "Frequency": "sometimes",
        "Label": "zoneout_2",
        "Comment": "zoneOut 2.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_placeholder\"}",
      "Advice": ""
    },
    {
      "NodeLevel": 1,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_170",
        "Attribute": "depositHasZoneOut",
        "Value": "zoneout_3 - ZoneOut",
        "Frequency": "sometimes",
        "Label": "zoneout_3",
        "Comment": "zoneOut 3.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_placeholder\"}",
      "Advice": ""
    },
    {
      "NodeLevel": 1,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_139",
        "Attribute": "depositHasZoneOut",
        "Value": "zoneout_1 - ZoneOut",
        "Frequency": "sometimes",
        "Label": "zoneout_1",
        "Comment": "zoneOut 1.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_placeholder\"}",
      "Advice": ""
    },
    {
      "NodeLevel": 1,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_42",
        "Attribute": "depositHasAlteration",
        "Value": "altassemblage_1 - Alteration",
        "Frequency": "usually",
        "Label": "altassemblage_1",
        "Comment": "altAssemblage 1. Dominated by carbonates particularly dolomite.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_placeholder\"}",
      "Advice": ""
    },
    {
      "NodeLevel": 2,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_44",
        "Attribute": "alterationHasMineralEnhanced",
        "Value": "mineral_01 - Carbonates",
        "Frequency": "always",
        "Label": "Carbonates",
        "Comment": "carbonates.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_descendent_ent\"}",
      "Advice": "No advice for entity null descendent"
    },
    {
      "NodeLevel": 2,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_46",
        "Attribute": "alterationHasMineralEnhanced",
        "Value": "mineral_03 - Pyrite",
        "Frequency": "sometimes",
        "Label": "Pyrite",
        "Comment": "",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_descendent_ent\"}",
      "Advice": "No advice for entity null descendent"
    },
    {
      "NodeLevel": 2,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_45",
        "Attribute": "alterationHasMineralEnhanced",
        "Value": "mineral_02 - Dolomite",
        "Frequency": "usually",
        "Label": "Dolomite",
        "Comment": "dolomite.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_descendent_ent\"}",
      "Advice": "No advice for entity null descendent"
    },
    {
      "NodeLevel": 1,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_6",
        "Attribute": "depositHasDepositClassAssociated",
        "Value": "depositclass_02 - Polymetallic_veins",
        "Frequency": "sometimes",
        "Label": "Polymetallic_veins",
        "Comment": "Polymetallic veins.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_no_score_object\"}",
      "Advice": ""
    },
    {
      "NodeLevel": 1,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_49",
        "Attribute": "depositHasAlteration",
        "Value": "altassemblage_2 - Alteration",
        "Frequency": "rarely",
        "Label": "altassemblage_2",
        "Comment": "altAssemblage 2.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_placeholder\"}",
      "Advice": ""
    },
    {
      "NodeLevel": 1,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_5",
        "Attribute": "depositHasDepositClassAssociated",
        "Value": "depositclass_01 - Polymetallic_replacement",
        "Frequency": "sometimes",
        "Label": "Polymetallic_replacement",
        "Comment": "Polymetallic replacement.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_no_score_object\"}",
      "Advice": ""
    },
    {
      "NodeLevel": 1,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_7",
        "Attribute": "depositHasAlteration",
        "Value": "altassemblage_3 - Alteration",
        "Frequency": "sometimes",
        "Label": "altassemblage_3",
        "Comment": "altAssemblage 3. Introduced into wallrocks.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_placeholder\"}",
      "Advice": ""
    },
    {
      "NodeLevel": 1,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_121",
        "Attribute": "depositHasZoneIn",
        "Value": "zonein_1 - ZoneIn",
        "Frequency": "sometimes",
        "Label": "zonein_1",
        "Comment": "zoneIn 1.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_placeholder\"}",
      "Advice": ""
    },
    {
      "NodeLevel": 1,
      "NodeScore": 0,
      "MatchType": "equivalent_ppts - disjoint",
      "InfocusAttribute": {
        "Id": "6417_3",
        "Attribute": "depositHasAge",
        "Value": "http://resource.geosciml.org/classifier/ics/ischart/Cretaceous-Cretaceous - http://resource.geosciml.org/classifier/ics/ischart/Cretaceous-Cretaceous",
        "Frequency": "sometimes",
        "Label": "Cretaceous",
        "Comment": "",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "592992_24",
        "Attribute": "depositHasAgeNumeric",
        "Value": "411-435 - 411-435",
        "Frequency": "present",
        "Label": "411-435 ma",
        "Comment": "",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"value_taxonomic_trace\":\"411-435 is disjointed with Cretaceous-Cretaceous .\",\"attribute_taxonomic_trace\":\"depositHasAgeNumeric is equivalent to depositHasAge .\",\"score_trace\":\"The weighted base reward of intervals for frequency sometimes(IF) and present(T) = 0.0. Multiplier (determined by the interval relations and frequency) = 1. Reward = 0.0*1 =0. Reward is scaled by 1. Therefore Final Score = 0*1 =0. \",\"descendants_score\":\"Score for matching the descendant attributes of the current values: 0. \"}",
      "Advice": ""
    },
    {
      "NodeLevel": 1,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_130",
        "Attribute": "depositHasZoneIn",
        "Value": "zonein_2 - ZoneIn",
        "Frequency": "sometimes",
        "Label": "zonein_2",
        "Comment": "zoneIn 2.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_placeholder\"}",
      "Advice": ""
    },
    {
      "NodeLevel": 1,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_141",
        "Attribute": "depositHasZoneIn",
        "Value": "zonein_3 - ZoneIn",
        "Frequency": "sometimes",
        "Label": "zonein_3",
        "Comment": "zoneIn 3.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_placeholder\"}",
      "Advice": ""
    },
    {
      "NodeLevel": 1,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_151",
        "Attribute": "depositHasZoneIn",
        "Value": "zonein_4 - ZoneIn",
        "Frequency": "sometimes",
        "Label": "zonein_4",
        "Comment": "zoneIn 4.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_placeholder\"}",
      "Advice": ""
    },
    {
      "NodeLevel": 1,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_116",
        "Attribute": "depositHasMineralization",
        "Value": "minassemblage_2 - Mineralization",
        "Frequency": "sometimes",
        "Label": "minassemblage_2",
        "Comment": "minAssemblage 2. Supergene enrichment depositing native gold, occurs in some deposits.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_placeholder\"}",
      "Advice": ""
    },
    {
      "NodeLevel": 2,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_117",
        "Attribute": "mineralizationHasElementEnhancedToOre",
        "Value": "element_12 - Au",
        "Frequency": "sometimes",
        "Label": "Au",
        "Comment": "&#39;Flour&#39; gold resultant from the destruction of the tellurides may not be retained in placer deposits.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_descendent_ent\"}",
      "Advice": "No advice for entity null descendent"
    },
    {
      "NodeLevel": 2,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_118",
        "Attribute": "mineralizationHasMineralEnhancedToOre",
        "Value": "mineral_21 - Gold",
        "Frequency": "sometimes",
        "Label": "Gold",
        "Comment": "gold.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_descendent_ent\"}",
      "Advice": "No advice for entity null descendent"
    },
    {
      "NodeLevel": 2,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_1986",
        "Attribute": "mineralizationHasMineralEnhanced",
        "Value": "mineral_23 - Emmonsite",
        "Frequency": "sometimes",
        "Label": "Emmonsite",
        "Comment": "Some tellurium redeposited as this oxide.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_descendent_ent\"}",
      "Advice": "No advice for entity null descendent"
    },
    {
      "NodeLevel": 3,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_2040",
        "Attribute": "mineralEnhancedHasColour",
        "Value": "colour_03 - green",
        "Frequency": "always",
        "Label": "green",
        "Comment": "",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_descendent_ent\"}",
      "Advice": "No advice for entity null descendent"
    },
    {
      "NodeLevel": 2,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_1976",
        "Attribute": "mineralizationHasMineralDepleted",
        "Value": "mineral_22 - Tellurides",
        "Frequency": "sometimes",
        "Label": "Tellurides",
        "Comment": "tellurides. Easily destroyed by weathering.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_descendent_ent\"}",
      "Advice": "No advice for entity null descendent"
    },
    {
      "NodeLevel": 1,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": "null - null",
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "592992_11",
        "Attribute": "depositHasRockHost",
        "Value": "earthmaterial_04 - shale",
        "Frequency": "present",
        "Label": "shale",
        "Comment": "charnoenderbrite,enderbrite,matrix-supported-conglomerate,metagabbronorite,metamonzogranite,metasyenogranite,shale,silstone,silty arenite,arenite,charnockite,metagranodiorite. From geology file.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"null_entity\"}",
      "Advice": ""
    },
    {
      "NodeLevel": 1,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_82",
        "Attribute": "depositHasMineralization",
        "Value": "minassemblage_1 - Mineralization",
        "Frequency": "always",
        "Label": "minassemblage_1",
        "Comment": "minAssemblage 1.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_placeholder\"}",
      "Advice": ""
    },
    {
      "NodeLevel": 2,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_93",
        "Attribute": "mineralizationHasElementEnhancedToOre",
        "Value": "element_11 - Au",
        "Frequency": "usually",
        "Label": "Au",
        "Comment": "",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_descendent_ent\"}",
      "Advice": "No advice for entity null descendent"
    },
    {
      "NodeLevel": 2,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_92",
        "Attribute": "mineralizationHasElementEnhancedToOre",
        "Value": "element_10 - Ag",
        "Frequency": "usually",
        "Label": "Ag",
        "Comment": "",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_descendent_ent\"}",
      "Advice": "No advice for entity null descendent"
    },
    {
      "NodeLevel": 2,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_84",
        "Attribute": "mineralizationHasElementEnhanced",
        "Value": "element_02 - Pb",
        "Frequency": "sometimes",
        "Label": "Pb",
        "Comment": "",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_descendent_ent\"}",
      "Advice": "No advice for entity null descendent"
    },
    {
      "NodeLevel": 2,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_85",
        "Attribute": "mineralizationHasElementEnhanced",
        "Value": "element_03 - Zn",
        "Frequency": "sometimes",
        "Label": "Zn",
        "Comment": "",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_descendent_ent\"}",
      "Advice": "No advice for entity null descendent"
    },
    {
      "NodeLevel": 2,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_83",
        "Attribute": "mineralizationHasElementEnhanced",
        "Value": "element_01 - Cu",
        "Frequency": "sometimes",
        "Label": "Cu",
        "Comment": "",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_descendent_ent\"}",
      "Advice": "No advice for entity null descendent"
    },
    {
      "NodeLevel": 2,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_90",
        "Attribute": "mineralizationHasElementEnhanced",
        "Value": "element_08 - PlatinumGroupElements",
        "Frequency": "sometimes",
        "Label": "PlatinumGroupElements",
        "Comment": "platinum_group_elements.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_descendent_ent\"}",
      "Advice": "No advice for entity null descendent"
    },
    {
      "NodeLevel": 2,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_91",
        "Attribute": "mineralizationHasElementEnhanced",
        "Value": "element_09 - Te",
        "Frequency": "sometimes",
        "Label": "Te",
        "Comment": "",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_descendent_ent\"}",
      "Advice": "No advice for entity null descendent"
    },
    {
      "NodeLevel": 2,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_88",
        "Attribute": "mineralizationHasElementEnhanced",
        "Value": "element_06 - F",
        "Frequency": "sometimes",
        "Label": "F",
        "Comment": "",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_descendent_ent\"}",
      "Advice": "No advice for entity null descendent"
    },
    {
      "NodeLevel": 2,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_89",
        "Attribute": "mineralizationHasElementEnhanced",
        "Value": "element_07 - Ba",
        "Frequency": "sometimes",
        "Label": "Ba",
        "Comment": "",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_descendent_ent\"}",
      "Advice": "No advice for entity null descendent"
    },
    {
      "NodeLevel": 2,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_86",
        "Attribute": "mineralizationHasElementEnhanced",
        "Value": "element_04 - Sb",
        "Frequency": "sometimes",
        "Label": "Sb",
        "Comment": "",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_descendent_ent\"}",
      "Advice": "No advice for entity null descendent"
    },
    {
      "NodeLevel": 2,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_87",
        "Attribute": "mineralizationHasElementEnhanced",
        "Value": "element_05 - Hg",
        "Frequency": "sometimes",
        "Label": "Hg",
        "Comment": "",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_descendent_ent\"}",
      "Advice": "No advice for entity null descendent"
    },
    {
      "NodeLevel": 2,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_96",
        "Attribute": "mineralizationHasMineralEnhancedToOre",
        "Value": "mineral_05 - Calaverite",
        "Frequency": "sometimes",
        "Label": "Calaverite",
        "Comment": "calaverite.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_descendent_ent\"}",
      "Advice": "No advice for entity null descendent"
    },
    {
      "NodeLevel": 2,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_98",
        "Attribute": "mineralizationHasMineralEnhancedToOre",
        "Value": "mineral_07 - Hessite",
        "Frequency": "sometimes",
        "Label": "Hessite",
        "Comment": "",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_descendent_ent\"}",
      "Advice": "No advice for entity null descendent"
    },
    {
      "NodeLevel": 2,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_97",
        "Attribute": "mineralizationHasMineralEnhancedToOre",
        "Value": "mineral_06 - Sylvanite",
        "Frequency": "sometimes",
        "Label": "Sylvanite",
        "Comment": "sylvanite.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_descendent_ent\"}",
      "Advice": "No advice for entity null descendent"
    },
    {
      "NodeLevel": 2,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_100",
        "Attribute": "mineralizationHasMineralEnhanced",
        "Value": "mineral_09 - Pyrite",
        "Frequency": "sometimes",
        "Label": "Pyrite",
        "Comment": "",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_descendent_ent\"}",
      "Advice": "No advice for entity null descendent"
    },
    {
      "NodeLevel": 2,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_99",
        "Attribute": "mineralizationHasMineralEnhanced",
        "Value": "mineral_08 - Coloradoite",
        "Frequency": "sometimes",
        "Label": "Coloradoite",
        "Comment": "",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_descendent_ent\"}",
      "Advice": "No advice for entity null descendent"
    },
    {
      "NodeLevel": 2,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_101",
        "Attribute": "mineralizationHasMineralEnhanced",
        "Value": "mineral_10 - Galena",
        "Frequency": "sometimes",
        "Label": "Galena",
        "Comment": "galena.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_descendent_ent\"}",
      "Advice": "No advice for entity null descendent"
    },
    {
      "NodeLevel": 2,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_103",
        "Attribute": "mineralizationHasMineralEnhanced",
        "Value": "mineral_12 - Tetrahedrite",
        "Frequency": "sometimes",
        "Label": "Tetrahedrite",
        "Comment": "tetrahedrite.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_descendent_ent\"}",
      "Advice": "No advice for entity null descendent"
    },
    {
      "NodeLevel": 2,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_102",
        "Attribute": "mineralizationHasMineralEnhanced",
        "Value": "mineral_11 - Sphalerite",
        "Frequency": "sometimes",
        "Label": "Sphalerite",
        "Comment": "",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_descendent_ent\"}",
      "Advice": "No advice for entity null descendent"
    },
    {
      "NodeLevel": 2,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_105",
        "Attribute": "mineralizationHasMineralEnhanced",
        "Value": "mineral_14 - Quartz",
        "Frequency": "sometimes",
        "Label": "Quartz",
        "Comment": "quartz.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_descendent_ent\"}",
      "Advice": "No advice for entity null descendent"
    },
    {
      "NodeLevel": 2,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_104",
        "Attribute": "mineralizationHasMineralEnhanced",
        "Value": "mineral_13 - Stibnite",
        "Frequency": "sometimes",
        "Label": "Stibnite",
        "Comment": "stibnite.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_descendent_ent\"}",
      "Advice": "No advice for entity null descendent"
    },
    {
      "NodeLevel": 2,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_107",
        "Attribute": "mineralizationHasMineralEnhanced",
        "Value": "mineral_16 - Barite",
        "Frequency": "sometimes",
        "Label": "Barite",
        "Comment": "",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_descendent_ent\"}",
      "Advice": "No advice for entity null descendent"
    },
    {
      "NodeLevel": 2,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_106",
        "Attribute": "mineralizationHasMineralEnhanced",
        "Value": "mineral_15 - Calcite",
        "Frequency": "sometimes",
        "Label": "Calcite",
        "Comment": "calcite.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_descendent_ent\"}",
      "Advice": "No advice for entity null descendent"
    },
    {
      "NodeLevel": 2,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_109",
        "Attribute": "mineralizationHasMineralEnhanced",
        "Value": "mineral_18 - Celestine",
        "Frequency": "sometimes",
        "Label": "Celestine",
        "Comment": "",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_descendent_ent\"}",
      "Advice": "No advice for entity null descendent"
    },
    {
      "NodeLevel": 2,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_108",
        "Attribute": "mineralizationHasMineralEnhanced",
        "Value": "mineral_17 - Fluorite",
        "Frequency": "sometimes",
        "Label": "Fluorite",
        "Comment": "fluorite. Absent in the Fiji deposit.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_descendent_ent\"}",
      "Advice": "No advice for entity null descendent"
    },
    {
      "NodeLevel": 3,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_1975",
        "Attribute": "mineralEnhancedHasColour",
        "Value": "colour_01 - purple",
        "Frequency": "sometimes",
        "Label": "purple",
        "Comment": "",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_descendent_ent\"}",
      "Advice": "No advice for entity null descendent"
    },
    {
      "NodeLevel": 2,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_110",
        "Attribute": "mineralizationHasMineralEnhanced",
        "Value": "mineral_19 - Roscoelite",
        "Frequency": "sometimes",
        "Label": "Roscoelite",
        "Comment": "",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_descendent_ent\"}",
      "Advice": "No advice for entity null descendent"
    },
    {
      "NodeLevel": 2,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_111",
        "Attribute": "mineralizationHasMineralEnhanced",
        "Value": "mineral_20 - Adularia",
        "Frequency": "sometimes",
        "Label": "Adularia",
        "Comment": "adularia.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null_descendent_ent\"}",
      "Advice": "No advice for entity null descendent"
    },
    {
      "NodeLevel": 1,
      "NodeScore": 9000,
      "MatchType": "exact_exact_ppt - exact_exact_val",
      "InfocusAttribute": {
        "Id": "6417_10010",
        "Attribute": "depositHasElementEnhancedToOre",
        "Value": "element_24 - Au",
        "Frequency": "usually",
        "Label": "Au",
        "Comment": "Propagated",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "592992_3",
        "Attribute": "depositHasElementEnhancedToOre",
        "Value": "element_01 - Au",
        "Frequency": "present",
        "Label": "Au",
        "Comment": "Mineral Occurrence is described as a deposit, therefore &#39;principal element&#39; is enhanced to ore level. From mineral occurrences.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"value_taxonomic_trace\":\"Au is the same type as Au .\",\"attribute_taxonomic_trace\":\"depositHasElementEnhancedToOre is the same attribute as depositHasElementEnhancedToOre .\",\"score_trace\":\"The weighted base reward of values for frequency usually(IF) and present(T) = 9000. Multiplier for exact match (determined by the semantic distance between them and their class levels) = 1. Therefore Score = 9000*1 =9000.\",\"descendants_score\":\"Score for matching the descendant attributes of the current values: 0. \"}",
      "Advice": ""
    },
    {
      "NodeLevel": 1,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": "null - null",
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "592992_10",
        "Attribute": "depositHasRockHost",
        "Value": "earthmaterial_03 - schist",
        "Frequency": "present",
        "Label": "schist",
        "Comment": "charnoenderbrite,enderbrite,matrix-supported-conglomerate,metagabbronorite,metamonzogranite,metasyenogranite,shale,silstone,silty arenite,arenite,charnockite,metagranodiorite. From geology file.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"null_entity\"}",
      "Advice": ""
    },
    {
      "NodeLevel": 1,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": "null - null",
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "592992_13",
        "Attribute": "depositHasRockHost",
        "Value": "earthmaterial_06 - tonalite",
        "Frequency": "present",
        "Label": "tonalite",
        "Comment": "charnoenderbrite,enderbrite,matrix-supported-conglomerate,metagabbronorite,metamonzogranite,metasyenogranite,shale,silstone,silty arenite,arenite,charnockite,metagranodiorite. From geology file.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"null_entity\"}",
      "Advice": ""
    },
    {
      "NodeLevel": 1,
      "NodeScore": -10,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_10008",
        "Attribute": "depositHasElementMznEnhanced",
        "Value": "element_22 - Te",
        "Frequency": "sometimes",
        "Label": "Te",
        "Comment": "Propagated",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null\"}",
      "Advice": "[{  \"infocusInfo\":\"The model states that Te is sometimes present at enhanced levels.\",  \"suggestion\":\"Check whether the instance has Te present at enhanced levels.\",  \"yes\":\"If so, the score improves by %s.\",  \"no\":\"If not, the score decreases by %s.\",  \"yesScore\":1010,  \"noScore\":990}]"
    },
    {
      "NodeLevel": 1,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": "null - null",
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "592992_12",
        "Attribute": "depositHasRockHost",
        "Value": "earthmaterial_05 - siltstone",
        "Frequency": "present",
        "Label": "siltstone",
        "Comment": "charnoenderbrite,enderbrite,matrix-supported-conglomerate,metagabbronorite,metamonzogranite,metasyenogranite,shale,silstone,silty arenite,arenite,charnockite,metagranodiorite. From geology file.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"null_entity\"}",
      "Advice": ""
    },
    {
      "NodeLevel": 1,
      "NodeScore": -10,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_10009",
        "Attribute": "depositHasElementEnhancedToOre",
        "Value": "element_23 - Ag",
        "Frequency": "usually",
        "Label": "Ag",
        "Comment": "Propagated",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null\"}",
      "Advice": "[{  \"infocusInfo\":\"The model states that Ag is usually present at enhanced to ore levels.\",  \"suggestion\":\"Check whether the instance has Ag present at enhanced to ore levels.\",  \"yes\":\"If so, the score improves by %s.\",  \"no\":\"If not, the score decreases by %s.\",  \"yesScore\":9010,  \"noScore\":8990}]"
    },
    {
      "NodeLevel": 1,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": "null - null",
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "592992_15",
        "Attribute": "depositHasRockHost",
        "Value": "earthmaterial_08 - granite",
        "Frequency": "present",
        "Label": "granite",
        "Comment": "charnoenderbrite,enderbrite,matrix-supported-conglomerate,metagabbronorite,metamonzogranite,metasyenogranite,shale,silstone,silty arenite,arenite,charnockite,metagranodiorite. From geology file.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"null_entity\"}",
      "Advice": ""
    },
    {
      "NodeLevel": 1,
      "NodeScore": -10,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_10006",
        "Attribute": "depositHasElementMznEnhanced",
        "Value": "element_20 - Ba",
        "Frequency": "sometimes",
        "Label": "Ba",
        "Comment": "Propagated",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null\"}",
      "Advice": "[{  \"infocusInfo\":\"The model states that Ba is sometimes present at enhanced levels.\",  \"suggestion\":\"Check whether the instance has Ba present at enhanced levels.\",  \"yes\":\"If so, the score improves by %s.\",  \"no\":\"If not, the score decreases by %s.\",  \"yesScore\":1010,  \"noScore\":990}]"
    },
    {
      "NodeLevel": 1,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": "null - null",
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "592992_14",
        "Attribute": "depositHasRockHost",
        "Value": "earthmaterial_07 - arenite",
        "Frequency": "present",
        "Label": "arenite",
        "Comment": "charnoenderbrite,enderbrite,matrix-supported-conglomerate,metagabbronorite,metamonzogranite,metasyenogranite,shale,silstone,silty arenite,arenite,charnockite,metagranodiorite. From geology file.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"null_entity\"}",
      "Advice": ""
    },
    {
      "NodeLevel": 1,
      "NodeScore": -10,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_10007",
        "Attribute": "depositHasElementMznEnhanced",
        "Value": "element_21 - PlatinumGroupElements",
        "Frequency": "sometimes",
        "Label": "PlatinumGroupElements",
        "Comment": "Propagated",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null\"}",
      "Advice": "[{  \"infocusInfo\":\"The model states that PlatinumGroupElements are sometimes present at enhanced levels.\",  \"suggestion\":\"Check whether the instance has PlatinumGroupElements present at enhanced levels.\",  \"yes\":\"If so, the score improves by %s.\",  \"no\":\"If not, the score decreases by %s.\",  \"yesScore\":1010,  \"noScore\":990}]"
    },
    {
      "NodeLevel": 1,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": "null - null",
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "592992_16",
        "Attribute": "depositHasRockHost",
        "Value": "earthmaterial_09 - orthogneiss",
        "Frequency": "present",
        "Label": "orthogneiss",
        "Comment": "charnoenderbrite,enderbrite,matrix-supported-conglomerate,metagabbronorite,metamonzogranite,metasyenogranite,shale,silstone,silty arenite,arenite,charnockite,metagranodiorite. From geology file.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"null_entity\"}",
      "Advice": ""
    },
    {
      "NodeLevel": 1,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": "null - null",
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "592992_4",
        "Attribute": "depositHasElementEnhanced",
        "Value": "element_02 - Si",
        "Frequency": "present",
        "Label": "Si",
        "Comment": "Element(s) are enhanced from the alteration type. From mineral occurrences.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"null_entity\"}",
      "Advice": ""
    },
    {
      "NodeLevel": 1,
      "NodeScore": -10,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_10011",
        "Attribute": "depositHasMineralEnhancedToOre",
        "Value": "mineral_25 - Calaverite",
        "Frequency": "sometimes",
        "Label": "Calaverite",
        "Comment": "Propagated",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null\"}",
      "Advice": "[{  \"infocusInfo\":\"The model states that Calaverite is sometimes present at enhanced to ore levels.\",  \"suggestion\":\"Check whether the instance has Calaverite present at enhanced to ore levels.\",  \"yes\":\"If so, the score improves by %s.\",  \"no\":\"If not, the score decreases by %s.\",  \"yesScore\":1010,  \"noScore\":990}]"
    },
    {
      "NodeLevel": 1,
      "NodeScore": -10,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_10013",
        "Attribute": "depositHasMineralEnhancedToOre",
        "Value": "mineral_27 - Hessite",
        "Frequency": "sometimes",
        "Label": "Hessite",
        "Comment": "Propagated",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null\"}",
      "Advice": "[{  \"infocusInfo\":\"The model states that Hessite is sometimes present at enhanced to ore levels.\",  \"suggestion\":\"Check whether the instance has Hessite present at enhanced to ore levels.\",  \"yes\":\"If so, the score improves by %s.\",  \"no\":\"If not, the score decreases by %s.\",  \"yesScore\":1010,  \"noScore\":990}]"
    },
    {
      "NodeLevel": 1,
      "NodeScore": -10,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_10012",
        "Attribute": "depositHasMineralEnhancedToOre",
        "Value": "mineral_26 - Sylvanite",
        "Frequency": "sometimes",
        "Label": "Sylvanite",
        "Comment": "Propagated",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null\"}",
      "Advice": "[{  \"infocusInfo\":\"The model states that Sylvanite is sometimes present at enhanced to ore levels.\",  \"suggestion\":\"Check whether the instance has Sylvanite present at enhanced to ore levels.\",  \"yes\":\"If so, the score improves by %s.\",  \"no\":\"If not, the score decreases by %s.\",  \"yesScore\":1010,  \"noScore\":990}]"
    },
    {
      "NodeLevel": 1,
      "NodeScore": -10,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_10015",
        "Attribute": "depositHasMineralMznEnhanced",
        "Value": "mineral_29 - Pyrite",
        "Frequency": "sometimes",
        "Label": "Pyrite",
        "Comment": "Propagated",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null\"}",
      "Advice": "[{  \"infocusInfo\":\"The model states that Pyrite is sometimes present at enhanced levels.\",  \"suggestion\":\"Check whether the instance has Pyrite present at enhanced levels.\",  \"yes\":\"If so, the score improves by %s.\",  \"no\":\"If not, the score decreases by %s.\",  \"yesScore\":1010,  \"noScore\":990}]"
    },
    {
      "NodeLevel": 1,
      "NodeScore": -10,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "6417_10014",
        "Attribute": "depositHasMineralMznEnhanced",
        "Value": "mineral_28 - Coloradoite",
        "Frequency": "sometimes",
        "Label": "Coloradoite",
        "Comment": "Propagated",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": null,
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"entity_null\"}",
      "Advice": "[{  \"infocusInfo\":\"The model states that Coloradoite is sometimes present at enhanced levels.\",  \"suggestion\":\"Check whether the instance has Coloradoite present at enhanced levels.\",  \"yes\":\"If so, the score improves by %s.\",  \"no\":\"If not, the score decreases by %s.\",  \"yesScore\":1010,  \"noScore\":990}]"
    },
    {
      "NodeLevel": 1,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": "null - null",
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "592992_9",
        "Attribute": "depositHasRockHost",
        "Value": "earthmaterial_02 - granofels",
        "Frequency": "present",
        "Label": "granofels",
        "Comment": "charnoenderbrite,enderbrite,matrix-supported-conglomerate,metagabbronorite,metamonzogranite,metasyenogranite,shale,silstone,silty arenite,arenite,charnockite,metagranodiorite. From geology file.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"null_entity\"}",
      "Advice": ""
    },
    {
      "NodeLevel": 1,
      "NodeScore": 0,
      "MatchType": "unmatched - unmatched",
      "InfocusAttribute": {
        "Id": "",
        "Attribute": null,
        "Value": "null - null",
        "Frequency": "",
        "Label": null,
        "Comment": null,
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "TargetAttribute": {
        "Id": "592992_8",
        "Attribute": "depositHasRockHost",
        "Value": "earthmaterial_01 - generic_conglomerate",
        "Frequency": "present",
        "Label": "generic conglomerate",
        "Comment": "generic_conglomerate. charnoenderbrite,enderbrite,matrix-supported-conglomerate,metagabbronorite,metamonzogranite,metasyenogranite,shale,silstone,silty arenite,arenite,charnockite,metagranodiorite. From geology file.",
        "CommentUrl": "-",
        "Ref": "-",
        "RefUrl": "-"
      },
      "Explanation": "{\"null_entity\"}",
      "Advice": ""
    }
  ]'
?>
