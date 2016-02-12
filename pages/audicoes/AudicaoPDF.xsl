<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    xmlns:fo="http://www.w3.org/1999/XSL/Format"
    version="2.0">
        
    
    <xsl:template match="/">
        <fo:root>
            <fo:layout-master-set>
                <fo:simple-page-master master-name="Audicao" page-height="297mm" page-width="210mm">
                    <fo:region-body region-name="corpo" margin="2cm"/>
                </fo:simple-page-master>
            </fo:layout-master-set>
            <xsl:apply-templates/>
        </fo:root>
    </xsl:template>
    
    <xsl:template match="audicao">
        <fo:page-sequence master-reference="Audicao">
            <fo:flow flow-name="corpo" font-size="12pt">
                <fo:block font-size="24pt" space-after="1cm" start-indent="6.3cm">Audição</fo:block>
                <xsl:apply-templates select="metadata"/>
                <xsl:apply-templates select="atuacoes"/>
            </fo:flow>
        </fo:page-sequence>
    </xsl:template>
    
   <xsl:template match="metadata">
       <fo:block  font-size="15pt"><fo:inline font-weight="bold">Título: </fo:inline> <xsl:value-of select="titulo"/></fo:block>
       <fo:block  font-size="15pt"><fo:inline font-weight="bold">Subtítulo: </fo:inline> <xsl:value-of select="subtitulo"/></fo:block>
       <fo:block  font-size="15pt"><fo:inline font-weight="bold">Tema: </fo:inline> <xsl:value-of select="tema"/></fo:block>
       <fo:block  font-size="15pt"><fo:inline font-weight="bold">Data: </fo:inline> <xsl:value-of select="data"/></fo:block>
       <fo:block  font-size="15pt"><fo:inline font-weight="bold">Local: </fo:inline> <xsl:value-of select="local"/></fo:block>
       <fo:block  font-size="15pt"><fo:inline font-weight="bold">Hora: </fo:inline> <xsl:value-of select="hora"/></fo:block>
       <fo:block  font-size="15pt"><fo:inline font-weight="bold">Organizador: </fo:inline> <xsl:value-of select="organizador"/></fo:block>
       <fo:block  font-size="15pt"><fo:inline font-weight="bold">Duração: </fo:inline> <xsl:value-of select="duracao"/>s</fo:block>   
    </xsl:template>
    
    <xsl:template match="atuacoes">   
        <fo:block font-size="18pt" space-before="1cm" space-after="1cm" font-weight="bold">Atuações:</fo:block>
        <fo:list-block>
            <xsl:apply-templates select="atuacao"></xsl:apply-templates>
        </fo:list-block>
    </xsl:template>
    
    <xsl:template match="atuacao">   
        <fo:list-item space-before="1cm" space-after="0.25cm">
            <fo:list-item-label>
                <fo:block>*</fo:block>
            </fo:list-item-label>
            <fo:list-item-body start-indent="0.5cm">
                <fo:block start-indent=".25cm"><fo:inline font-weight="bold">Designação: </fo:inline><xsl:value-of select="designacao"/></fo:block>
            </fo:list-item-body>            
        </fo:list-item>
        <fo:list-item space-after="0.5cm">
            <fo:list-item-label>
                <fo:block>*</fo:block>
            </fo:list-item-label>
            <fo:list-item-body start-indent="0.5cm">
                <fo:block start-indent=".25cm" space-after="0.25cm" font-weight="bold">Alunos:</fo:block>
                <xsl:apply-templates select="alunos"/>
            </fo:list-item-body>            
        </fo:list-item>
        
        <xsl:apply-templates select="professores"/>
        
        <fo:list-item space-after="0.25cm">
            <fo:list-item-label>
                <fo:block>*</fo:block>
            </fo:list-item-label>
            <fo:list-item-body start-indent="0.5cm">
                <fo:block start-indent=".25cm" space-after="0.25cm" font-weight="bold">Obras:</fo:block>
                <xsl:apply-templates select="pecas"/>
            </fo:list-item-body>            
        </fo:list-item>
        
    </xsl:template>
    
    <xsl:template match="alunos">           
        <fo:list-block>
            <xsl:apply-templates select="aluno"/>
        </fo:list-block>
    </xsl:template>
    
    <xsl:template match="aluno">   
        <fo:list-item space-after=".125cm">
            <fo:list-item-label>
                <fo:block>-</fo:block>
            </fo:list-item-label>
            <fo:list-item-body start-indent="0.7cm">
                <fo:block>Nome: <xsl:value-of select="Nome"/></fo:block>
            </fo:list-item-body>
        </fo:list-item>
        <fo:list-item space-after=".5cm">
            <fo:list-item-label>
                <fo:block>-</fo:block>
            </fo:list-item-label>
            <fo:list-item-body start-indent="0.7cm">
                <fo:block>Instrumento: <xsl:value-of select="Instrumento"/></fo:block>
            </fo:list-item-body>
        </fo:list-item>
    </xsl:template>
    
    <xsl:template match="professores">  
        <fo:list-item space-after="0.25cm">
            <fo:list-item-label>
                <fo:block>*</fo:block>
            </fo:list-item-label>
            <fo:list-item-body start-indent="0.5cm">
                <fo:block start-indent=".25cm" space-after="0.25cm" font-weight="bold">Professores: </fo:block>
                <fo:list-block>
                    <xsl:apply-templates select="professor"/>
                </fo:list-block>
            </fo:list-item-body>            
        </fo:list-item> 
    </xsl:template>
    
    <xsl:template match="professor">   
        <fo:list-item space-after=".5cm">
            <fo:list-item-label>
                <fo:block>-</fo:block>
            </fo:list-item-label>
            <fo:list-item-body start-indent="0.7cm">
                <fo:block>Nome: <xsl:value-of select="Nome"/></fo:block>
            </fo:list-item-body>
        </fo:list-item>
    </xsl:template>
     
     
    
    <xsl:template match="pecas">           
        <fo:list-block>
            <xsl:apply-templates select="peca"/>
        </fo:list-block>
    </xsl:template>
    
    <xsl:template match="peca">   
        <fo:list-item space-after=".125cm">
            <fo:list-item-label>
                <fo:block>-</fo:block>
            </fo:list-item-label>
            <fo:list-item-body start-indent="0.7cm">
                <fo:block>Nome: <xsl:value-of select="Nome"/></fo:block>
            </fo:list-item-body>
        </fo:list-item>
        <fo:list-item space-after=".125cm">
            <fo:list-item-label>
                <fo:block>-</fo:block>
            </fo:list-item-label>
            <fo:list-item-body start-indent="0.7cm">
                <fo:block>Compositor: <xsl:value-of select="compositor"/> (<xsl:value-of select="dataNasc"/>/<xsl:value-of select="dataMorte"/>)</fo:block>
            </fo:list-item-body>
        </fo:list-item>
        <fo:list-item space-after=".5cm">
            <fo:list-item-label>
                <fo:block>-</fo:block>
            </fo:list-item-label>
            <fo:list-item-body start-indent="0.7cm">
                <fo:block>Duração: <xsl:value-of select="duracao"/></fo:block>
            </fo:list-item-body>
        </fo:list-item>
    </xsl:template>
    
</xsl:stylesheet>